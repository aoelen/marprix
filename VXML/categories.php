<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<vxml version = "2.1" >';
?>

<!-- 
The header is in PHP for consistecy with the other files in case they need to be merged or new functionalities need to be added.
-->
  
  <menu id="menu1" dtmf="true">
   <prompt>
    <break time="1s"/>   
    For fruits press 1.
    For vegetables press 2.
    For other products press 3.
  </prompt>
   <choice next="fruits.php"/>
   <choice next="vegetables.php"/>
  <choice next="others.php"/>
  </menu>


</vxml>