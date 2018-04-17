<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<vxml version = "2.1" >';
require("phpsqlsearch_dbinfo.php");
$connection= mysqli_connect($server, $username, $password, $database);
if (!$connection) {
  die("Not connected : " . mysqli_connect_error());
}

?>

<!-- 
The header and database connection is set up.
-->

<menu id="form-ID-retreival">
  <property name="inputmodes" value="dtmf"/>
  <prompt>
    <break time="1s"/>   
Please enter your product ID:
  </prompt>
  <choice dtmf="1" next="#ID1"/>
  <choice dtmf="2" next="#ID2"/>
  <choice dtmf="3" next="#ID3"/>
  <choice dtmf="4" next="#ID4"/>
  <choice dtmf="5" next="#ID5"/>
  <choice dtmf="6" next="#ID6"/>
</menu>


<menu id="ID1" dtmf="true">
   <prompt>
        <break time="1s"/>   
    The price of Bananas is:
 <?php

$querry = "SELECT `Price` FROM `Fruits` WHERE `ID`=1";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
<break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="#form-ID-retreival"/>
   <choice next="categories.php"/>
 </menu>


<menu id="ID2" dtmf="true">
   <prompt>
    The price of Apples is:
 <?php

$querry = "SELECT `Price` FROM `Fruits` WHERE `ID`=2";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
    <break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
 </menu>


<menu id="ID3" dtmf="true">
   <prompt>
    The price of oranges is:
 <?php

$querry = "SELECT `Price` FROM `Fruits` WHERE `ID`=3";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
    <break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
 </menu>


<menu id="ID4" dtmf="true">
   <prompt>
    The price of lettuce is:
 <?php

$querry = "SELECT `Price` FROM `Fruits` WHERE `ID`=4";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
    <break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
 </menu>

<menu id="ID5" dtmf="true">
   <prompt>
    The price of Rice is:
 <?php

$querry = "SELECT `Price` FROM `Others` WHERE `ID`=1";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
    <break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
 </menu>


<menu id="ID6" dtmf="true">
   <prompt>
    The price of Spinach is:
 <?php

$querry = "SELECT `Price` FROM `Vegetables` WHERE `ID`=1";
$query = mysqli_query($connection, $querry);
$rows = array();

while($r = mysqli_fetch_assoc($query)) {
    print($r['Price']);
}
?>
<break time="0.5s"/>  
CEDI per bowl.
    <break time="1s"/>   
If you want to enter another product ID, press 1. 
If you want to know the price of other products but you dont know the ID, press 2. 
Otherwise you may end the call.
</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
 </menu>

<?php
mysqli_close($connection);
?>

</vxml>