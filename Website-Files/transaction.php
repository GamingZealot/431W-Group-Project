<?php

	$DEFAULT_IID = 0;

	$db = mysqli_connect('localhost','root','Password22#','cmpsc431w')
 	or die('Error connecting to MySQL server.');

 	$mid = $_GET['mid'];
	$iid = $_GET['iid'];
	$trType = $_GET['trType'];
	$bid = $_GET['bid'];

	if ($iid == null) $iid = $DEFAULT_IID;

	// find movie corresponding to movie id
	$query = "SELECT M.title
	          FROM Is_Movie I, Movies M
	          WHERE M.movieId = I.movieId AND I.itemId = ".$iid." ";

	mysqli_query($db, $query) or die('Error querying movies database.');
	$movie = mysqli_fetch_array(mysqli_query($db, $query));


	// seller info
	$query = "SELECT S.sellerId, S.companyName
	          FROM Sold_By B, Sellers S
	          WHERE B.sellerId = S.sellerId AND B.itemId = ".$iid;

	mysqli_query($db, $query) or die('Error querying movies database.');
	$seller = mysqli_fetch_array(mysqli_query($db, $query));	          

	switch ($trType)
	{
		case 1:
			$revenue = money_format("%n", $bid);
			$msg = "Placing bid of $".$revenue." for movie <i>".$movie['title']."</i>";
			break;

		case 2:
			$query = "SELECT rentPrice
			          FROM RentableItems R
			          WHERE itemId = ".$iid;

			mysqli_query($db, $query) or die('Error querying movies database.');
			$rentItem = mysqli_fetch_array(mysqli_query($db, $query));

			$revenue = money_format("%n", $rentItem['rentPrice']);
			$msg = "Renting <i>".$movie['title']."</i> for $".$revenue;
			break;
		
		default:
			$query = "SELECT price
			          FROM SaleItems S
			          WHERE itemId = ".$iid;

			mysqli_query($db, $query) or die('Error querying movies database.');
			$saleItem = mysqli_fetch_array(mysqli_query($db, $query));
			
			$revenue = money_format("%n", $saleItem['price']);
			$msg = "Purchasing <i>".$movie['title']."</i> for $".$revenue;
			break;
	}

	// find info about user (use cookie)
	$cookie_name = "user_id"; // -> from login.php
	$uid = $_COOKIE[$cookie_name];

	$query = "SELECT *
	          FROM Users U
	          WHERE uid = ".$uid;

	mysqli_query($db, $query) or die('Error querying movies database.');
	$user = mysqli_fetch_array(mysqli_query($db, $query));

	// get credit card info
	$query = "SELECT *
	          FROM Uses_Card U, CreditCards C
	          WHERE U.cardId = C.cardId AND U.uid = ".$uid;

	mysqli_query($db, $query) or die('Error querying movies database.');
	$card = mysqli_fetch_array(mysqli_query($db, $query));

	if ($card != null)
	{
		$cardNumber = $card['cardNum'];
		$cardNumber = str_pad(substr($cardNumber, -4), strlen($cardNumber), '*', STR_PAD_LEFT);	
	}
	else
	{
		$cardNumber = "[none on file]";
	}

	$transactionDone = 0;

	// do the transaction
	if (isset($_POST['cvv']))
	{
		// check cvv. if incorrect, abort. otherwise, determine if bid is eligible for auctions, then make any transaction

		$query = "INSERT INTO Transactions (sellerId, uid, itemId) VALUES(".$seller['sellerId'].", ".$uid.", ".$iid.")";
		mysqli_query($db, $query) or die('Error adding new transaction to database.');

		$transactionDone = 1;

		// then need to update item (stock, rent availability, highest bid, etc)
	}

	echo '<header><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></header>';
	echo '<body style="padding: 10px">';

	if ($card == null)
		echo '<form method="POST" action="item.php?mid='.$mid.'&iid='.$iid.'">';
	else if (!$transactionDone)
		echo '<form method="POST" action="transaction.php?mid='.$mid.'&iid='.$iid.'&trType='.$trType.'&bid='.$bid.'">';
	else
		echo '<form method="POST" action="item.php?mid='.$mid.'&iid='.$iid.'">';

	echo '<strong>Confirmation:</strong> '.$msg.'<br/><br/>';
	
	if ($trType != 1)
		echo '<strong>Ship to:</strong><br/>'.$user['addressStreet'].'<br/>'.
	          $user['addressCity'].' '.$user['addressState'].' '.$user['addressZip'].'<br/><br/>';

	echo '<strong>Your credit card information:</strong><br/> '.
	     'Type: '.$card['cardType'].'<br/>Number: '.$cardNumber.'<br/><br/>';
	echo 'Enter card cvv: <input type="text" name="cvv" placeholder="(3 digits)"/><br/><br/>';
	if ($card != null) echo '<input type="submit" value="Submit"/>';
	else echo "<label style='color: red'>Cannot complete transaction: no credit card on file.</label><br/>";
	echo '<input type="submit" value="Cancel"/>';
	echo '</form></body>';
?>
