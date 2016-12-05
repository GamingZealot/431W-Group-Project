<html>
<head>
* required fields:<br><br>
<FORM NAME ="form1" METHOD ="POST" ACTION = "login.php">
Username*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "username">
<br>Password*:<br>
<INPUT TYPE = "PASSWORD" VALUE ="" NAME = "password">
<br><br><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">

<?PHP

if (isset($_POST['Submit1'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];


	if (empty($username) || empty($password)){

		if (empty($username)){
			print ("Username is required<br>");
		}
		if (empty($password)){
			print ("Password is required<br>");
		}
	}	
	else {
		$db = mysqli_connect('localhost','root','','cmpsc431w')
 		or die('Error connecting to MySQL server.');

		$query = "SELECT uid FROM Users WHERE name = '".$username."' AND password = '".$password."'";
		mysqli_query($db, $query) or die('Error querying database selecting username.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$uid = $row['uid'];
		
		if(empty($uid))
		{
			print("Incorrect username or password<br>");
		}
		else
		{
		$cookie_name = "user_id";
		$cookie_value = $uid;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day	
		$cookie_name = "user_name";
		$cookie_value = $username;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day			
		header('Location: home.php');
		}
	}
}
?>
</head>


</html>


</FORM>