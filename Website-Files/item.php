<?php
 	$db = mysqli_connect('localhost','root','Dudio10','cmpsc431w')
 	or die('Error connecting to MySQL server.');

 	$mid = $_GET['mid'];
	$iid = $_GET['iid'];

// find movie corresponding to movie id
// TODO: handle erroneous movie IDs
	$query = "SELECT *
              FROM Movies
              WHERE movieId = " . $mid . " ";

	mysqli_query($db, $query) or die('Error querying movies database.');
	$result = mysqli_query($db, $query);
	$movie = mysqli_fetch_array($result);
?>

<html>
	<head>
		<img width="350" height="60" src="../images/banner.png"/><br/>
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
			<a href="home.php">&#8592;Back to search results</a><br/>
		</div>
		<div id="item-preview">
			<img src="http://i.ebayimg.com/00/$T2eC16ZHJIEFHRr5RCt!BS!h,kG0y!~~_35.JPG?set_id=89040003C1"/>
		</div>
		<div id="item-purchase-info">
			<strong class="title item-title"></strong><br/><br/>

			<div id="purchasing-options">
				<div id="buying-details" class="purchase-details">
					Buy it now!<br/>
					Price: <label class="price-label"></label><br/>
					Stock: <label class="stock-label"></label><br/>
					<button onclick="alert('purchased')">Buy this item</button>
				</div>
				<br/>
				<div id="auction-details" class="purchase-details">
					Place a new bid<br/>
					Current bid: <label class="price-label"></label><br/>
					<input type="text" id="newBidArea"/><br/>
					<button onclick="alert('Bid placed')">Place bid</button>
					<br/>
					Auction ends at <label class="ending-time"></label><br/>
					Time remaining: <label class="remaining-time"></label>
				</div>
				<br/>
				<div id="renting-details" class="purchase-details">
					Available for rent!<br/>
					Price: <label class="price-label"></label><br/>
					<button onclick="alert('Rent complete')">Rent now</button>
				</div>
			</div>
			<div id="seller-info">
				<strong class="title">Seller Information</strong><br/><br/>
				<div class="specifics">
					Name: <label id="seller-name"></label><br/>
					Location: <label id="seller-location"></label><br/>
					Seller rating: <label id="seler-rating"></label><br/>
				</div>
			</div>
		</div>
		<br class="clearboth"/>
		<div id="movie-description">
			<strong class="title">Item description</strong><br/>
			<div class="specifics">
				Title: <label class="item-title"></label><br/>
				Year: <label class="item-year"></label><br/>
				Synopsis: <label class="item-synopsis"></label><br>
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
  		var forSale, forAuction, forRent;

  		forSale = forAuction = forRent = false;

  		var prices = document.getElementsByClassName("price-label");
  		
  		var dfData = {
  			title: "Star Wars Episode III: Revenge of the Sith",
  			price: 599,
  			stock: 3,
  			year: 2002,
  			synopsis: "It has been three years since the Clone Wars began. Jedi Master Obi-Wan Kenobi (Ewan McGregor)...",
  			sRating: 98,
  			sLocation: "Las Vegas, Nevada",
  			BuyAucRnt: [true, true, true],
  			endTime: "2024.11.08.23.09"
  		}

  		for (var i = 0; i < prices.length; i++)
  		{
  			prices[i].innerHTML = "$" + Math.floor(dfData.price - (i * 250)) + ".99";
  			if (i == 1)
				document.getElementById("newBidArea").placeholder = "$" + Math.floor(dfData.price - (i * 250) + 2) + ".00 or higher";
  		}

  		document.addEventListener("DOMContentLoaded", function()
  		{
  			// general movie info
  			$(".item-title").html(<?php echo $movie['title']?>);
  			$(".item-year").html(<?php echo $movie['year']?>);
  			$(".item-synopsis").html(<?php echo $movie['synopsis']?>);

  			// info pertaining to sale items
  			if (forSale)
			{
				$(".stock-label").html(dfData.stock);
				$("#buying-details").show();
			}

			// info pertaining to auction items
			if (forAuction)
			{	
	  			$(".ending-time").html(dfData.endTime);
	  			$(".remaining-time").html("323,902.1 hours");
	  			$("#auction-details").show();
	  		}

  			// infor pertaining to renting items
  			if (forRent)
  			{
  				$("#renting-details").show();
  			}
  		});

  	</script>

</html>
