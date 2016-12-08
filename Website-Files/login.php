<a href="home.php"><img src="banner.png" /></a>

<font face="comic sans ms, comic sans, papyrus" color="red" >
<center><br><img id="vhs" src="vhs.jpg" alt="" style="height:128px;"/><br><br>
<head>
* required fields:<br><br>
<FORM NAME ="form1" METHOD ="POST" ACTION = "login.php">
Username*:<br>
<INPUT TYPE = "TEXT" VALUE ="" NAME = "username">
<br>Password*:<br>
<INPUT TYPE = "PASSWORD" VALUE ="" NAME = "password">
<br><br><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit"><br><br>
<img id="dvd" src="dvd.gif" alt="" style="height:128px;"/></center>
</div>

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
		$db = mysqli_connect('127.0.0.1','root','password','cmpsc431w')
 		or die('Error connecting to MySQL server.');
		$query = "SELECT uid FROM Users WHERE name = '".$username."' AND password = '".$password."'";
		mysqli_query($db, $query) or die('Error querying database selecting username.');
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$uid = $row['uid'];
		
		if(empty($uid))
		{
			echo "<br><center>Incorrect username or password</center><br>";
		}
		else
		{
		$cookie_name = "user_id";
		$cookie_value = $uid;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day	
		$cookie_name = "user_name";
		$cookie_value = $username;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day			
		echo '<script type="text/javascript">document.location.href = "home.php"</script>';
		}
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

	</div>
	



</head>


</html>


</FORM>