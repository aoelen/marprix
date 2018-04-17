<?php
require("phpsqlsearch_dbinfo.php");
$connection= mysqli_connect($server, $username, $password, $database);
if (!$connection) {
  die("Not connected : " . mysqli_connect_error());
}



//$ID = ($_POST['id']);
//$Price = ($_POST['price']);
$rows = ($_POST['rows']);
echo $rows;

$x = 1; 
while($x <= $rows){
	$ID = $x;
	echo $ID;
	$Price = ($_POST['price-' . $x]);
	$querry = "UPDATE `Others` SET `Price`=" . $Price . " WHERE `ID`='" . $ID . "'";
	$query = mysqli_query($connection, $querry);	
	echo $querry;
	$x++;
};


//$querry = "UPDATE `Fruits` SET `Price`=" . $Price . " WHERE `ID`=" . $ID;
//$query = mysqli_query($connection, $querry);
//echo $querry;
mysqli_close($connection);
echo "<a href='index.php'>return</a>";


?>

