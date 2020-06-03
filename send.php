<?php
$msg = 'try to mail sent';
 //recipient email here
$rec = "17bmiit032@gmail.com";
 //send 
$sub="MAIL";
mail($rec,$sub,$msg);
 	echo "mail sent successfully";
?>




