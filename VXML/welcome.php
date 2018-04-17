<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<vxml version = "2.1" >';
?>

<!-- 
This is a single welcome message that initiates the dialog of the voice application. 
It should not be accessed again and is therefore placed in a seperate file for more clear and structured code.
The header is in PHP for consistency with the other files in case they need to be merged or new functionalities need to be added.
-->
  <menu id="menu1" dtmf="true">
   <prompt>Welcome to MarPrix. This service allows to retrieve the latest market prices. 
   	If you know the product ID you want to know the price off, press 1. 
    Otherwise, Please press 2 to go to product categories.</prompt>
   <choice next="IDs.php"/>
   <choice next="categories.php"/>
  </menu>

</vxml>