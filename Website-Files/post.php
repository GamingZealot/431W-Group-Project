<?PHP
if (isset($_POST['Submit1'])) {

	$userID = $_COOKIE["user_id"];
	$movie = $_POST['Movie'];
	$year = $_POST['Year'];
	$photo = $_POST['Photo'];
	$synop = $_POST['Synopsis'];
	$format = $_POST['Format'];
	$location = $_POST['Location'];
	$desc = $_POST['Description'];
	$price = $_POST['Price'];
	$method = $_POST['method'];

	
	$saleStock = $_POST['saleStock'];
	$auctionEnd = $_POST['auctionEnd'];

	if (empty($movie) || empty($price)|| empty($format) || empty($location) || empty($desc) || empty($method)){

		if (empty($movie)){
			print ("Movie Title is required<br>");
		}
		if (empty($price)){
			print ("Price is required<br>");
		}

	}else{
		$db = mysqli_connect('127.0.0.1','root','','cmpsc431w') or die('Error connecting to MySQL server.');
		$query = "INSERT INTO Movies (title, year, pictureURL, synopsis) VALUES ('".$movie."',".$year.",'".$photo."','".$synop."')";
		mysqli_query($db, $query) or die('Error querying database 1.');

		$query = "INSERT INTO Items (format, location, description) VALUES ( '".$format."','".$location."','".$desc."')";
		mysqli_query($db, $query) or die('Error querying database 2.');


		$query = "SELECT M.movieId
					FROM Movies as M
					WHERE M.title = '".$movie."'";
		mysqli_query($db, $query) or die('Error querying database 3.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$movieID  = $row['movieId'];


		$query = "SELECT *
					FROM Items as I
					WHERE I.format = '".$format."' AND I.location = '".$location."'";
		mysqli_query($db, $query) or die('Error querying database 4.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$itemID  = $row['itemId'];

		$query = "INSERT INTO Is_Movie (itemId, movieId) VALUES ( '".$itemID."','".$movieID."')";
		mysqli_query($db, $query) or die('Error querying database 5.');


		$query = "SELECT ISe.sellerId
					FROM  Is_Seller as ISe
					WHERE ISe.uid = ".$userID."";
		mysqli_query($db, $query) or die('Error querying database 6.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$sellerID  = $row['sellerId'];


		$query = "INSERT INTO Sold_By(itemId, sellerId) VALUES (".$itemID .", ".$sellerID.")";
		mysqli_query($db, $query) or die('Error querying database 10.');


		if($method == "sale"){
			$query = "INSERT INTO SaleItems (stock, price, itemId) VALUES ( ".$saleStock.",".$price.", ".$itemID.")";
			mysqli_query($db, $query) or die('Error querying database 7.');
		}

		if($method == "auction"){
			$query = "INSERT INTO AuctionItems (endTime, currentBid, reservePrice, itemId) VALUES ( '".$auctionEnd." 00:00:00', 0, ".$price.",".$itemID.")";
			mysqli_query($db, $query) or die('Error querying database 8.');
		}
		if($method == "rent"){
			$query = "INSERT INTO RentableItems (rentPrice, itemID) VALUES ( ".$price.",".$itemID.")";
			mysqli_query($db, $query) or die('Error querying database 9.');

		}
		header('Location: profile.php');
	}

}
?>
<html>
<body style="background-color:powderblue;">
</body>
  <style>
            body {
				
            }
            #banner {
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0px;
                width: 100%;
                height: 200px;
                z-index: -1;
            }
			
			#left, #right {
			 width: 100px; //change this to whatever required
			 float: left;
			}			
        </style>
    </head>
    <body>
	<div>
    <img id="banner" src="banner.png" alt="Banner Image"/>
	</div>

<div style="position: relative; top: 25%;">
	<font face="comic sans ms, comic sans, papyrus" color="red" size="4"> It is time to make some money for yourself!<br> Give me the info and I'll take it off your hands!!!! <br> -Big Mike <br><br>
	<img id="thumbup" src="thumbup.png" alt="" style="height:128px;"/>
</div>	
	
<div style="position: absolute; top: 25%; left: 35%">
<center>
<head>
* required fields:<br><br>
<FORM NAME ="form1" METHOD ="POST" ACTION = "post.php">
Movie Title*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Movie">
<br>Year:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Year">
<br>Photo URL:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Photo">
<br>Synopsis:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Synopsis">
<br>Format*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Format">
<br>Location*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Location">
<br>Description*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Description">
<br>Price*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "Price"> <br>

<INPUT type="radio" name="method" value="sale"> Sale<br>
<INPUT type="radio" name="method" value="auction"> Auction<br>
<INPUT type="radio" name="method" value="rent"> Rent

<br>
<br>If Sale Was Selected, tell us... <br> Available Stock*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "saleStock"> <br>
<br>
<br>If Auction Was Selected, tell us...<br> End Time  (YYYY-MM-DD) *:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "auctionEnd"> <br>
<br><br><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">
</FORM>
</center>
</div>
</head>
</html> 