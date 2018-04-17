<html>
<head>

<title>MarPrix</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0' >


</head>
<body>
<iframe name="votar" style="display:none;" id="myElem">hey</iframe>
<div id="welcomeDiv"  style="display:none;" class="answer_list" >Updated</div>

<?php
require("phpsqlsearch_dbinfo.php");
$connection= mysqli_connect($server, $username, $password, $database);
if (!$connection) {
  die("Not connected : " . mysqli_connect_error());
}

$query_fruit = "SELECT `ID`, `Name`,`Icon`, `Price`, `Date` FROM `Fruits`";
$result_fruit = mysqli_query($connection, $query_fruit);

echo "<center><img src='logo.png' class='logo'><table class='tably' border='1'>
<tr class='headerrow'>
<th colspan='2'>Fruits</th>
</tr>
<tr class='titlerow'>
<th>Product</th>
<th>Price (CEDI per bowl)</th>
</tr>";
$rows = 0;
while($row = mysqli_fetch_array($result_fruit)){
echo "<form method='post'><tr>";
echo "<td class='hidden'><input class='id' readonly='readonly' name='id' value='" . $row['ID'] . "'></td>";
echo "<td><img class='icon' src='icon/" . $row['Icon'] ."'>" . $row['Name'] . "</td>";
echo "<td><input name='price-" . $row['ID'] . "' value='" . $row['Price'] . "'></td>";
echo "</tr>";
$rows ++;
}
echo "<input readonly='readonly' class='hidden' name='rows' value='" . $rows . "'>";
echo "<tr><td colspan='2'><center><button formaction='updatetable.php' class='save' onclick='showDiv()' formtarget='votar' type='submit'>save</button></center></td></tr></form>";
echo "<tr class='lastrow'></table></center>";


$query_veg = "SELECT `ID`, `Name`,`Icon`, `Price`, `Date` FROM `Vegetables`";
$result_veg = mysqli_query($connection, $query_veg);

echo "<center><table class='tably' border='1'>

<tr class='headerrow'>
<th colspan='2'>Vegetables</th>
</tr>
<tr class='titlerow'>
<th>Product</th>
<th>Price (CEDI per bowl)</th>
</tr>";
$rows = 0;
while($row = mysqli_fetch_array($result_veg)){
echo "<form method='post'><tr>";
echo "<td class='hidden'><input class='id' readonly='readonly' name='id' value='" . $row['ID'] . "'></td>";
echo "<td><img class='icon' src='icon/" . $row['Icon'] ."'>" . $row['Name'] . "</td>";
echo "<td><input name='price-" . $row['ID'] . "' value='" . $row['Price'] . "'></td>";
echo "</tr>";
$rows ++;
}
echo "<input readonly='readonly' class='hidden' name='rows' value='" . $rows . "'>";
echo "<tr><td colspan='2'><center><button formaction='updateveg.php' class='save' onclick='showDiv()' formtarget='votar' type='submit'>save</button></center></td></tr></form>";
echo "<tr class='lastrow'></table></center>";


$query_other = "SELECT `ID`, `Name`,`Icon`, `Price`, `Date` FROM `Others`";
$result_other = mysqli_query($connection, $query_other);

echo "<center><table class='tably' border='1'>
<tr class='headerrow'>
<th colspan='2'>Other products</th>
</tr>
<tr class='titlerow'>
<th>Product</th>
<th>Price (CEDI per bowl)</th>
</tr>";
$rows = 0;
while($row = mysqli_fetch_array($result_other)){
echo "<form method='post'><tr>";
echo "<td class='hidden'><input class='id' readonly='readonly' name='id' value='" . $row['ID'] . "'></td>";
echo "<td><img class='icon' src='icon/" . $row['Icon'] ."'>" . $row['Name'] . "</td>";
echo "<td><input name='price-" . $row['ID'] . "' value='" . $row['Price'] . "'></td>";
echo "</tr>";
$rows ++;
}
echo "<input readonly='readonly' class='hidden' name='rows' value='" . $rows . "'>";
echo "<tr><td colspan='2'><center><button formaction='updateother.php' class='save' onclick='showDiv()' formtarget='votar' type='submit'>save</button></center></td></tr></form>";
echo "<tr class='lastrow'></table></center>";
mysqli_close($con);
?>


<script type="text/javascript">

function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
   document.body.focus();
   setTimeout(hideDiv, 1500);


}

function hideDiv(){
	 document.getElementById('welcomeDiv').style.display = "none";
}


</script>


</body>
</html>