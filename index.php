<?php
$host = "localhost";

$user = "root";

$pass = "cheese";

$db   = "cmpsc431w";


$r = mysql_connect($host, $user, $pass);


if (!$r) {
	echo "Could not connect to server\n";

	trigger_error(mysql_error(), E_USER_ERROR);

} else {
	
//echo "Connection established<br/>";

}


//echo mysql_get_server_info() . "<br/><br/>";

$r2 = mysql_select_db($db);

//$query = "SELECT I.itemId, C.categoryName 
//FROM Items I, Categories C, Categorized_as A
//WHERE I.itemId = A.itemId AND C.categoryId = A.categoryId";

$query = "SELECT I.itemId, M.title, S.price, C.categoryName, F.name
 FROM Categories C, Items I, Movies M, Sellers D, SaleItems S, Categorized_as A, Is_Movie B, Sold_By E, Users F, Is_Seller G
 WHERE C.categoryId = A.categoryId AND A.itemId = I.itemId AND I.itemId = B.itemId AND B.movieId = M.movieId AND I.itemId = E.itemId AND E.sellerId = D.sellerId AND I.itemId = S.itemId AND D.sellerId = G.sellerId AND F.uid = G.uid";
$rs = mysql_query($query);



echo "<TABLE border = 1>";

echo "<tr><td>itemId</td><td>title</td><td>price</td><td>seller</td><td>category</td></tr>"; 

while ($row = mysql_fetch_assoc($rs)) {
	
echo "<tr>";

echo 	"<td>" . $row['itemId'] . "</td>" .	
	"<td>" . $row['title'] . "</td>" .	
	"<td>$" . $row['price'] . "</td>" .
	
	"<td>" . $row['name'] . "</td>".
	
	"<td>" . $row['categoryName'] . "</td>";

echo "</tr>";

}


echo "</TABLE>";


mysql_close();


?>