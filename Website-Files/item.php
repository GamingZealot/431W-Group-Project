<?php
if (isset($_POST['buyItem']))
{
	if (!$loggedIn) echo '<script>alert("Please sign in to make purchases")</script>';
}
else if (isset($_POST['placeBid']))
{
	if (!$loggedIn) echo '<script>alert("Please sign in to make new bids")</script>';
}
else if (isset($_POST['rentItem']))
{
	if (!$loggedIn) echo '<script>alert("Please sign in to rent movies")</script>';
}
// load data into cmpsc431w
// source /Library/WebServer/Documents/helloworld/TableCreation.sql
// source /Library/WebServer/Documents/helloworld/sample_data_1.sql
// INSERT INTO CreditCards (cardNum, securityCode, cardType, cardExp) VALUES(1234123412341234, "789", "VISA", '1000-01-01 00:00:00');
// INSERT INTO Uses_Card (uid, cardId) VALUES(9, 1);
	$DEFAULT_MID = 0;
	$DEFAULT_IID = 0;

 	$db = mysqli_connect('localhost','root','Password22#','cmpsc431w')
 	or die('Error connecting to MySQL server.');

 	$mid = $_GET['mid'];
	$iid = $_GET['iid'];

	if ($mid == null) $mid = $DEFAULT_MID;
	if ($iid == null) $iid = $DEFAULT_IID;

	// find movie corresponding to movie id
	$query = "SELECT * FROM Movies WHERE movieId = ".$mid." ";
	mysqli_query($db, $query) or die('Error querying movies database.');
	$movie = mysqli_fetch_array(mysqli_query($db, $query));

	// find item
	$query = "SELECT * FROM Items WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying items database.');
	$item = mysqli_fetch_array(mysqli_query($db, $query));

	// ensure movie and item are valid in Is_Movie table
	$query = "SELECT *
			  FROM Is_Movie
			  WHERE movieId = ".$mid." AND itemId = ".$iid;
	mysqli_query($db, $query) or die('Error querying Saleitems.');
	$is_movie = mysqli_fetch_array(mysqli_query($db, $query));

	if ($is_movie != null) $valid_match = ($is_movie['movieId'] == $mid);
	else                   $valid_match = 0;


	// figure out if item is for sale, rent, auction, or combination of those
	$query = "SELECT * FROM SaleItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying Saleitems.');
	$saleItem = mysqli_fetch_array(mysqli_query($db, $query));
	$forSale = ($saleItem != null);

	$query = "SELECT * FROM RentableItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying RentableItems.');
	$rentableItem = mysqli_fetch_array(mysqli_query($db, $query));
	$forRent = ($rentableItem != null);
	
	// only show renting dialogue if item is in rental table and if it is available
	if ($forRent && ($rentableItem['availability'] != null))
		$forRent = 0;

	$query = "SELECT * FROM AuctionItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying AuctionItems.');
	$auctionItem = mysqli_fetch_array(mysqli_query($db, $query));
	$forAuction = ($auctionItem != null);
	// NOTE: can't display this if the time has run out already


	// find info about seller
	$query = "SELECT S.companyName, U.ratingAvg
	          FROM Sold_By B, Sellers S, Is_Seller I, Users U
	          WHERE B.sellerId = S.sellerId AND I.sellerId = B.sellerId AND I.uid = U.uid AND B.itemId = ".$iid;
	mysqli_query($db, $query) or die('Error querying Sold_By.');
	$seller = mysqli_fetch_array(mysqli_query($db, $query));

	$sellerRating = "no ratings yet";

	if ($seller['ratingAvg'] != null)
		$sellerRating = $seller['ratingAvg'].' out of 5 stars';


	// find info about user (use cookie)
	$cookie_name = "user_id"; // -> from login.php

	$loggedIn = isset($_COOKIE[$cookie_name]);

	if(!$loggedIn)
	{
		// don't let user buy anything 
		$loginMsg = "Not logged in";
	}
	else
	{
		$query = "SELECT name
		          FROM Users
		          WHERE uid = ".$_COOKIE[$cookie_name];
		mysqli_query($db, $query) or die('Error getting username from cookie');
		$user = mysqli_fetch_array(mysqli_query($db, $query));
		$loginMsg = "Logged in as ".$user['name'];
	}
?>

<html>
	<head>
		<a href="home.php"><img width="350" height="60" src="../images/banner.png"/></a>
		<label id="loginNotice"><?php echo $loginMsg?></label><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
		body { padding: 0; margin: 0; }
		#loginNotice { margin: 10px; float: right; }
		.title { font-size: 18px; }
		.noDisplay { display: none; }
		#item-preview
		{
			height: 46%;
			width: 26%;
			margin: 2%;
			background-color: #EEEEEE;
			float: left;
			text-align: center;
		}
		#moviePic
		{
			height: 92%;
			width: 92%;
			margin: 4%;
		}
		#item-purchase-info { width: 70%; float: right; }
		.purchase-details
		{
			display: none;
			width: 400px;
			background: red;
			padding: 10px;
		}
		#purchasing-options { float: left; }
		#seller-info
		{
			float: left;
			width: 50%;
			padding-left: 30px;
			text-align: center;
		}
		.specifics { text-align: left; }
		#movie-description
		{
			margin: 10px;
			padding: 10px;
			background: #EEEEEE;
			text-align: center; 
		}
		.clearboth { clear: both; }
		#footer { padding: 10px; }
		</style>
	</head>
	<body>
		<div id="item-preview">
			<img id="moviePic" src="<?php 
				if ($movie['pictureUrl'] == null)
					echo 'vhs.jpg';
				else
					echo $movie['pictureUrl']; ?>"/>
		</div>
		<div id="item-purchase-info">
			<i><strong class="title item-title"><?php echo $movie['title']?></strong></i><br/><br/>

			<div id="purchasing-options">
				<form action="<?php
					if (!$loggedIn)
						echo 'item.php?mid='.$mid.'&iid='.$iid;
					else
						echo 'transaction.php?mid='.$mid.'&iid='.$iid.'&trType=0';
					?>" id="buying-details" class="purchase-details" method="POST">
					<i>Buy it now!</i><br/>
					Price: <label>$<?php echo money_format("%n", $saleItem['price'])?></label><br/>
					Stock: <label><?php echo $saleItem['stock']?> items remaining</label><br/>
					<button type="submit" name="buyItem">Buy this item</button>
				</form>
				<br/>
				<form action="<?php
					if (!$loggedIn)
						echo 'item.php?mid='.$mid.'&iid='.$iid;
					else
						echo 'transaction.php?mid='.$mid.'&iid='.$iid.'&trType=1';
				 	?>" id="auction-details" class="purchase-details" method="<?php $loggedIn ? 'PRE' : 'POST'?>">
					<i>Place a new bid</i><br/>
					Current bid: <label>$<?php echo money_format("%n", $auctionItem['currentBid'])?></label><br/>
					<input type="text" name="bid" id="newBidArea"
					       placeholder="<?php echo '$'.money_format('%n', $auctionItem['currentBid'] + 1).' or more'?>"/><br/>
					<input class="noDisplay" name="iid" value="<?php echo $iid?>"/>
					<input class="noDisplay" name="mid" value="<?php echo $mid?>"/>
					<input class="noDisplay" name="trType" value="1"/>
					<button type="submit">Place bid</button>
					<br/>
					Auction ends at <label><?php echo $auctionItem['endTime']?></label><br/>
					Time remaining: <label>[calculate]</label>
				</form>
				<br/>
				<form action="<?php 
					if (!$loggedIn)
						echo 'item.php?mid='.$mid.'&iid='.$iid;
					else
						echo 'transaction.php?mid='.$mid.'&iid='.$iid.'&trType=2';
					?>" id="renting-details" class="purchase-details" method="POST">
					<i>Available for rent!</i><br/>
					Price: <label>$<?php echo money_format("%n", $rentableItem['rentPrice'])?></label><br/>
					<button type="submit" name="rentItem">Rent now</button>
				</form>
				<br/>
				<div id="NA-details" class="purchase-details">
					Unfortunately, the specified item is not available for sale, auction, or rent at this time.<br/>
				</div>
			</div>
			<div id="seller-info">
				<strong class="title">Seller Information</strong><br/><br/>
				<div class="specifics">
					Name: <label><?php echo $seller['companyName']?></label><br/>
					Seller rating average: <label><?php echo $sellerRating?></label><br/>
				</div>
			</div>
		</div>
		<br class="clearboth"/>
		<div id="movie-description">
			<strong class="title">Item description</strong><br/>
			<div class="specifics">
				Title: <i><label><?php echo $movie['title']?></label></i><br/>
				Year: <label><?php echo $movie['year']?></label><br/>
				Synopsis: <label><?php echo $movie['synopsis']?></label><br>
				Location: <label><?php echo $item['location']?></label><br>
				Movie Format: <label><?php echo $item['format']?></label><br>
				User Description: <label><?php echo $item['description']?></label><br>
			</div>
		</div>
		<br class="clearboth"/>
  		<div id="footer">
	  		<p><font size="2px"> Site created by HelloWorld </font></p>
	  		<p>
	  			<font size="2px">
	  				Contact information: 
	  				<a href="mailto:support@helloworld.com">support@helloworld.com</a>.
	  			</font>
	  		</p>
	  	</div>
	</body>

  	<script>
		// info pertaining to sale items
		<?php 
		if (!$valid_match || !($forSale || $forAuction || $forRent))
		{
			echo '$("#NA-details").show();';
		}
		else 
		{
			// show info pertaining to sale items
			if ($forSale)
			{
				echo '$("#buying-details").show();
			          $(".stock-label").html("");';
			}

			// info pertaining to auction items
			if ($forAuction)
			{
				echo '$("#auction-details").show();
					  $(".ending-time").html("");
	  			      $(".remaining-time").html("");';
			}

	  		// info pertaining to renting items
			if ($forRent)
			{
				echo '$("#renting-details").show();';
			}
		}
		?>
  	</script>
</html>
