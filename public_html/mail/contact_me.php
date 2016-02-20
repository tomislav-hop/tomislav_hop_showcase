<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
$to = 'tomislav.hop@gmail.com';
$email_subject = "Poslano sa portfolija od:  $name";
$email_body = "Poruka sa portfolija.\n"."Detalji poruke:\nIme i prezime: $name\nEmail: $email_address\nPoruka:\n$message";
mail($to,$email_subject,$email_body);
return true;			
?>