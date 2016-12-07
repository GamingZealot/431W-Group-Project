<?php
// load data into cmpsc431w
// source /Library/WebServer/Documents/helloworld/TableCreation.sql
// source /Library/WebServer/Documents/helloworld/sample_data_1.sql
	$DEFAULT_MID = 0;
	$DEFAULT_IID = 0;

 	$db = mysqli_connect('localhost','root','Password22#','cmpsc431w')
 	or die('Error connecting to MySQL server.');

 	$mid = $_GET['mid'];
	$iid = $_GET['iid'];

	if ($mid == null) $mid = $DEFAULT_MID;
	if ($iid == null) $iid = $DEFAULT_IID;

// find movie corresponding to movie id
// TODO: handle erroneous movie IDs 

	$query = "SELECT *
              FROM Movies
              WHERE movieId = ".$mid." ";

	mysqli_query($db, $query) or die('Error querying movies database.');
	$result = mysqli_query($db, $query);
	$movie = mysqli_fetch_array($result);


	$query = "SELECT *
              FROM Items
              WHERE itemId = ".$iid." ";

	mysqli_query($db, $query) or die('Error querying items database.');
	$result = mysqli_query($db, $query);
	$item = mysqli_fetch_array($result);


// TODO: ensure movie and item are valid in Is_Movie table


	// figure out if item is for sale, rent, auction, or combination of those
	$query = "SELECT * FROM SaleItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying Saleitems.');
	$result = mysqli_query($db, $query);
	$saleItem = mysqli_fetch_array($result);
	$forSale = ($saleItem != null);

	$query = "SELECT * FROM RentableItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying RentableItems.');
	$result = mysqli_query($db, $query);
	$rentableItem = mysqli_fetch_array($result);
	$forRent = ($rentableItem != null);

	$query = "SELECT * FROM AuctionItems WHERE itemId = ".$iid." ";
	mysqli_query($db, $query) or die('Error querying AuctionItems.');
	$result = mysqli_query($db, $query);
	$auctionItem = mysqli_fetch_array($result);
	$forAuction = ($auctionItem != null);



	$query = "SELECT S.companyName
	          FROM Sold_By B, Sellers S
	          WHERE B.sellerId = S.sellerId AND B.itemId = ".$iid;
	mysqli_query($db, $query) or die('Error querying Sold_By.');
	$result = mysqli_query($db, $query);
	$seller = mysqli_fetch_array($result);

?>

<html>
	<head>
		<a href="home.php"><img width="350" height="60" src="../images/banner.png"/></a><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
		body
		{
			padding: 0;
			margin: 0;
		}
		.title
		{
			font-size: 18px;
		}
		#head-spacer
		{
			padding: 10px;
		}
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
		#item-purchase-info
		{
			width: 70%;
			float: right;
		}
		.purchase-details
		{
			display: none;
			width: 400px;
			background: red;
			padding: 10px;
		}
		#purchasing-options
		{
			float: left;
		}
		#seller-info
		{
			float: left;
			width: 50%;
			padding-left: 30px;
			text-align: center;
		}
		.specifics
		{
			text-align: left;
		}
		#movie-description
		{
			height: 200px;
			margin: 10px;
			padding: 10px;
			background: #EEEEEE;
			text-align: center; 
		}
		.clearboth
		{
			clear: both;
		}
		#footer
		{
			padding: 10px;
		}
		</style>
	</head>
	<body>
		<div id="head-spacer">
			<a href="category.php">&#8592;Back to search results</a><br/>
		</div>
		<div id="item-preview">
			<img id="moviePic" src="<?php 
				if ($movie['pictureUrl'] == null)
					echo 'vhs.jpg';
				else
					echo $movie['pictureUrl']; ?>"/>
		</div>
		<div id="item-purchase-info">
			<strong class="title item-title"><?php echo $movie['title']?></strong><br/><br/>

			<div id="purchasing-options">
				<div id="buying-details" class="purchase-details">
					Buy it now!<br/>
					Price: <label>$<?php echo money_format("%n", $saleItem['price'])?></label><br/>
					Stock: <label><?php echo $saleItem['stock']?> items remaining</label><br/>
					<button onclick="alert('you done did it')">Buy this item</button>
				</div>
				<br/>
				<div id="auction-details" class="purchase-details">
					Place a new bid<br/>
					Current bid: <label>$<?php echo money_format("%n", $auctionItem['currentBid'])?></label><br/>
					<input type="text" id="newBidArea"/><br/>
					<button onclick="alert('Bid placed')">Place bid</button>
					<br/>
					Auction ends at <label><?php echo $auctionItem['endTime']?></label><br/>
					Time remaining: <label>[calculate]</label>
				</div>
				<br/>
				<div id="renting-details" class="purchase-details">
					Available for rent!<br/>
					Price: <label>$<?php echo money_format("%n", $rentableItem['rentPrice'])?></label><br/>
					<button onclick="alert('Rent complete')">Rent now</button>
				</div>
				<br/>
				<div id="NA-details" class="purchase-details">
					Unfortunately, this item is not available for sale, auction, or rent at this time.<br/>
				</div>
			</div>
			<div id="seller-info">
				<strong class="title">Seller Information</strong><br/><br/>
				<div class="specifics">
					Name: <label><?php echo $seller['companyName']?></label><br/>
					Location: <label id="seller-location"></label><br/>
					Seller rating: <label id="seler-rating"></label><br/>
				</div>
			</div>
		</div>
		<br class="clearboth"/>
		<div id="movie-description">
			<strong class="title">Item description</strong><br/>
			<div class="specifics">
				Title: <label><?php echo $movie['title']?></label><br/>
				Year: <label><?php echo $movie['year']?></label><br/>
				Synopsis: <label><?php echo $movie['synopsis']?></label><br>
				Location: <label><?php echo $item['location']?></label><br>
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
		document.getElementById("newBidArea").placeholder = 
			"$" + (1 + <?php echo $auctionItem['currentBid']?>).toString() + " or higher";

		// info pertaining to sale items
		<?php 
		if ($forSale)
			echo '$("#buying-details").show();
		          $(".stock-label").html("");';

		// info pertaining to auction items
		if ($forAuction)
			echo '$("#auction-details").show();
				  $(".ending-time").html("");
  			      $(".remaining-time").html("");';

  		// info pertaining to renting items
		if ($forRent)
			echo '$("#renting-details").show();';

		if (!($forSale || $forAuction || $forRent))
			echo '$("#NA-details").show();'
		?>

  	</script>

</html>
