	<p align="right">
<?PHP
	if(!isset($_COOKIE["user_id"])) {
		echo '<input type="button" name="Login" value="Login" style="height:25px" onclick="openLogin()">';
		echo '<input type="button" name="Register" value="Register" style="height:25px" onclick="openRegister()">';
	} else {
		echo "<a href='profile.php?uid=" . $_COOKIE["user_id"] . "'>Welcome " . $_COOKIE["user_name"] . "!</a>";
		echo '<input type="button" name="Logout" value="Logout" style="height:25px" onclick="openLogout()">';
	}
?>
	</p>

<?php
	$db = mysqli_connect('127.0.0.1','root','','cmpsc431w')
 	or die('Error connecting to MySQL server.');
	$uid = $_COOKIE["user_id"];

//Basic user info
	$query = 	
		"SELECT *
 		FROM Users
 		WHERE Users.uid = ".$uid." ";
		mysqli_query($db, $query) or die('Error querying database1.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$uid  = $row['uid'];
		$name = $row['name'];
		$addrstr = $row['addressStreet'];
		$addrcty = $row['addressCity'];
		$addrstate = $row['addressState'];
		$addrzip = $row['addressZip'];
		$phone = $row['phone'];
		$age = $row['age'];

//get won auctions
		$query1 = "
		SELECT *
		FROM Transactions as T, Items as I, AuctionItems as AI, Is_Movie as IM, Movies as M
		WHERE T.uid = ".$uid." AND T.itemId = I.itemId AND I.itemID = AI.itemId AND AI.itemId = IM.itemId AND IM.movieId = M.movieId";
		$result1 = mysqli_query($db, $query1) or die('Error querying database2.');
		$num_records1 = $result1->num_rows;


//get purchased items
		$query2 = 
		"SELECT *
		FROM Transactions as T, Items as I, SaleItems as SI, is_Movie as IM, Movies as M
		WHERE T.uid = ".$uid." AND T.itemId = I.itemId AND I.itemID = SI.itemId AND SI.itemId = IM.itemId AND IM.movieId = M.movieId";
		$result2 = mysqli_query($db, $query2) or die('Error querying database3.');
		$num_records2 = $result2->num_rows;

//determine if seller
		$query3 = 	
		"SELECT *
 		FROM is_Seller
 		WHERE is_Seller.uid = ".$uid." ";
 		$result3 = mysqli_query($db, $query3);
 		$num_records3 = $result3->num_rows;
 		$isSeller = False;
 		if ($num_records3 == 1){
 			$isSeller = True;
 		}
	?>

<html>
 	<head>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        </style>
    	<img id="banner" src="banner.png" alt="Banner Image"/>
    </head>
	<body style="background-color:powderblue;">
		<?php
		echo '<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>';
		if ($uid == 0){
			echo '<b>Sales Report</b><br>';
			$query5 = "SELECT DISTINCT M.title as Item, U.name as Buyer, US.name as Seller, T.revenue as Revenue
						FROM Transactions as T, Items as I, Users as U, Is_Movie as IM, Movies as M, Is_Seller as ISe, Sellers as S, Users as US
						WHERE T.itemId = I.itemId AND I.itemId = IM.itemId AND IM.movieId = M.movieId AND T.uid = U.uid AND T.sellerId = ISe.sellerId AND ISe.uid = US.uid";
 		$result5 = mysqli_query($db, $query5);
 		

 		echo "<TABLE border = 1>";
		echo "<tr><td>Item</td><td>Buyer</td><td>Seller</td><td>Revenue</td></tr>";
		while ($row5 = mysqli_fetch_array($result5)) {
			echo "<tr>";
			echo "<td>" . $row5['Item'] . "</td>"."<td>".$row5['Buyer']."</td>"."<td>".$row5['Seller']."</td>"."<td>".$row5['Revenue']."</td>";
			echo "</tr>";
		}
		echo "</TABLE>";



		}else{
			echo '<b>User Information</b><br>';
			echo 'Name: '. $name.'<br>';
			echo 'Street: '. $addrstr.'<br>';
			echo 'City: '. $addrcty.'<br>';
			echo 'State: '. $addrstate.'<br>';
			echo 'Zipcode: '. $addrzip.'<br>';
			echo 'Phone: '. $phone.'<br>';
			echo 'Age: '. $age.'<br><br>';

			echo '<b>Auctions Won:</b><br>';
			echo '<a href="post.php" class="button">List an item for sale</a><br>';
			if($num_records1 == 0){
				echo 'You have not won any auctions yet. <br>';
			}
			while ($row1 = mysqli_fetch_array($result1)) {
				echo 'Movie Title: '. $row1['title']. '<br>';
 				echo 'Price Paid: '. $row1['currentBid']. '<br>';
			} 

			echo '<br><b>Purchased Movies: </b><br>';
			if($num_records2 == 0){
				echo 'You have not purchased any movies yet. <br>';
			}
			while ($row2 = mysqli_fetch_array($result2)) {
 				echo 'Movie Title: '. $row2['title']. '<br>';
 				echo 'Price Paid: '. $row2['price']. '<br>';
			}

			//if($isSeller == True){
				$query4 = 	
					"SELECT *
					FROM Is_Seller as ISe, is_Movie as IM, Transactions as T, Movies as M
					WHERE ISe.uid = ".$uid." AND ISe.sellerId = T.sellerId AND T.itemId = IM.itemId AND IM.movieId = M.movieId";
 					$result4 = mysqli_query($db, $query4);
 					echo '<br><b>Sold Items:</b><br>';
 					echo '<a href="post.php" class="button">List an item for sale</a><br>';
 					while ($row4 = mysqli_fetch_array($result4)) {
 						echo 'Movie Title: '. $row4['title']. '<br>';
 						echo 'Revenue: '. $row4['revenue']. '<br>';
 					}
		//	}
			echo '<br><br>';
		}
	mysqli_close($db);
		?>



<br> <br> <br> <br><br> <br> <br> <br>
	</body>
	<footer>
  		<p><font size="2px"> Site created by HelloWord </font></p>
  		<p><font size="2px"> Contact information: <a href="mailto:support@helloword.com">
  		support@helloworld.com</a>.</font></p>
</footer>
</html>
