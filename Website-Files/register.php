<html>
<head>
* required fields:<br><br>
<FORM NAME ="form1" METHOD ="POST" ACTION = "register.php">
Username*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "username">
<br>Password*:<br>
<INPUT TYPE = "PASSWORD" VALUE ="" NAME = "password">
<br>Email*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "email">
<br>Address Street:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "street">
<br>Address City:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "city">
<br>Address State:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "state">
<br>Address ZIP:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "zip">
<br>Phone:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "phone">
<br>Age:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "age">
<br>Credit Card #*:<br>
<INPUT TYPE = "PASSWORD" VALUE ="" NAME = "cardnum">
<br>Credit Card Type*:<br>
<INPUT TYPE = "PASSWORD" VALUE ="" NAME = "cardtype">
<br>Credit Card Expiration Date* (YEAR-DD-MM)<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "expdate">
<br><br><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">

</FORM>

<?PHP

if (isset($_POST['Submit1'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$cardnum = $_POST['cardnum'];
	$cardtype = $_POST['cardtype'];
	$expdate = $_POST['expdate'];

	if (empty($username) || empty($password) || empty($cardnum) || empty($cardtype) || empty($expdate)){

		if (empty($username)){
			print ("Username is required<br>");
		}
		if (empty($password)){
			print ("Password is required<br>");
		}	
		if (empty($cardnum)){
			print ("Card Number is required<br>");
		}
		if (empty($cardtype)){
			print ("Card type is required<br>");
		}
		if (empty($expdate)){
			print ("Card expiration date is required<br>");
		}	
	}
	else {
		$db = mysqli_connect('localhost','root','Dudio10','cmpsc431w')
 		or die('Error connecting to MySQL server.');
		$query = "INSERT INTO Users (email, password, name, addressStreet, addressCity, addressState, addressZip, phone, age) VALUES ( '".$email."','".$password."','".$username."','".$street."','".$city."','".$state."', '".$zip."', '".$phone."', ".$age.")";
		mysqli_query($db, $query) or die('Error querying database.');
		
		$query = "INSERT INTO CreditCards (cardNum, securityCode, cardType, cardExp) VALUES ( '".$cardnum."','abcd' ,'".$cardtype."','".$expdate."')";
		mysqli_query($db, $query) or die('Error querying database.');	

		$query = "SELECT uid FROM Users WHERE name = '".$username."' AND password = '".$password."'";
		mysqli_query($db, $query) or die('Error querying database.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$uid = $row['uid'];

		$query = "SELECT cardId FROM CreditCards WHERE cardNum = '".$cardnum."'";
		mysqli_query($db, $query) or die('Error querying database.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$cardId = $row['cardId'];

		$query = "INSERT INTO Uses_Card (uid, cardId) VALUES ( ".$uid.",".$cardId.")";
		mysqli_query($db, $query) or die('Error querying database.');

	}

}
?>
</head>


</html>
