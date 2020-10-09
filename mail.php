<?php 
$to = "nagartushar11122001@gmail.com";
$subject = "response from website";
$message = "thanks";
$headers = "From:tusharnagarop@gmail.com";

if(mail($to, $subject, $message, $headers)){
	echo "mail sent sucess";
	else{
		echo "cannot sent"
	}
}

 ?>