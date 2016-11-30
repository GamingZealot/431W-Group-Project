<!DOCTYPE html>
<?php
 $db = mysqli_connect('localhost','root','Dudio10','cmpsc431w')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
	<?php 
	$cat = $_GET['cat'];
	$sch = $_GET['sch'];	
	 ?>
 </head>
 <body>
 <p id="Title" name = "Title"><?php echo $cat; ?></p>

<?php
$query = "SELECT M.title
 FROM Categories C, Movies M, Items I, Categorized_as A, Is_Movie B
 WHERE C.categoryName = '".$cat."' AND C.categoryId = A.categoryId AND A.itemId = I.itemId AND I.itemId = B.itemId AND B.movieId = M.movieId AND M.title LIKE '%".$sch."%'";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
 echo '<a href="' . $row['title'] . '">' . $row['title'] . '</a>';
}
mysqli_close($db);
?>

</body>
</html>




