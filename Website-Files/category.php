<!DOCTYPE html>
<?php
 $db = mysqli_connect('localhost','root','Dudio10','cmpsc431w')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<?php 
	$cat = $_GET['cat'];
	$sch = $_GET['sch'];	
	 ?>
 </head>
 <body>
 <font size="7" color="red"><b><?php echo $cat; ?></b></font>
 <p align="right">
 <input type="button" name="Login" value="Login" style="height:25px" onclick="openLogin()">
 <input type="button" name="Register" value="Register" style="height:25px" onclick="openRegister()">
 </p>
</div>

<div>
<style>
	a {
		color: black;
	}
	ul {
		border: 1px solid black;
		float: left;
		padding: 0;
		margin: 0;
		width: 70px;
		background: #ccc;
	}
	li {

		float: left;
		display: inline;
		position: relative;
		list-style: none;
	}
	ul ul {
		position: absolute;
		left: 0;
		top: 100%;
		background: #ccc;
		display: none;
	}
	ul ul ul {
		border: 1px solid black;
		left: 100%;
		top: 0;
		background: #ccc;
	}
	li:hover > ul {
		display: block;
	}
	
	p {
		clear: left;
		padding-top: 1em;
	}
</style>
<ul>
	<li>
	<a href="category.php?cat=All&sch=">All Movies</a>
	<ul>
		<li><a href="category.php?cat=Movies&sch=">Movies</a></li>
		<li><a href="category.php?cat=TV Shows&sch=">TV Shows</a></li>
		<li><a href="category.php?cat=Editor Choice&sch=">Editor Choice</a></li>
		<li><a href="category.php?cat=Top Sellers&sch=">Top Sellers</a></li>
		<li><a href="category.php?cat=Top Rated&sch=">Top Rated</a></li>
		<li><a href="category.php?cat=New Arrivals&sch=">New Arrivals</a></li>
		<li>
		<a href="">Award Winners</a>
		<ul>
			<li><a href="category.php?cat=Academy Award&sch=">Academy Award</a></li>
			<li><a href="category.php?cat=Grammy&sch=">Grammy</a></li>
			<li><a href="category.php?cat=Emmy&sch=">Emmy</a></li>
			<li><a href="category.php?cat=Tony&sch=">Tony</a></li>
		</ul>
		</li>
		<li>
		<a href="">Genres</a>
		<ul>
			<li><a href="category.php?cat=Comedy&sch=">Comedy</a></li>
			<li><a href="category.php?cat=Horror&sch=">Horror</a></li>
			<li><a href="category.php?cat=Adventure&sch=">Adventure</a></li>
			<li><a href="category.php?cat=Animated&sch=">Animated</a></li>
			<li><a href="category.php?cat=Children&sch=">Children</a></li>
			<li><a href="category.php?cat=Documentary&sch=">Documentary</a></li>
			<li><a href="category.php?cat=Drama&sch=">Drama</a></li>
			<li><a href="category.php?cat=Romance&sch=">Romance</a></li>
			<li><a href="category.php?cat=Sci-Fi&sch=">Sci-Fi</a></li>
		</ul>
		</li>
		<li>
		<a href="">Studios</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Years</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Actor</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Actress</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Medium</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
	</ul>
	</li>
</div>
  <input id="searchBar" type="text" name="firstname" style="font-size:18pt;height:25px;width:1000px;"><input type="button" value="Search" style="height:30px;" onclick="openSearch()"/>
</p>
<?php
$query = "SELECT M.title, M.movieId, M.year, M.synopsis, I.itemId
 FROM Categories C, Movies M, Items I, Categorized_as A, Is_Movie B
 WHERE C.categoryName = '".$cat."' AND C.categoryId = A.categoryId AND A.itemId = I.itemId AND I.itemId = B.itemId AND B.movieId = M.movieId AND M.title LIKE '%".$sch."%'";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
 echo '<a href="item.php?mid='.$row['movieId'].'&iid='.$row['itemId'].'" style="color: red">' . $row['title'] . '</a>';
 echo '<p>' . $row['year'] . '<br>';
 echo '' . $row['synopsis'] . '</p><br>';
}
mysqli_close($db);
?>
<script>
function openRegister() {
     document.location.href = 'register.php';
}
function openLogin() {
     document.location.href = 'login.php';
}
function openSearch() {
	document.location.href = "category.php?cat=<?php echo $cat; ?>&sch=" + document.getElementById("searchBar").value;
}
</script>
</body>
</html>




