<?php
 // check if fields passed are empty
 //if(empty($_POST['name'])  		||
 //   empty($_POST['company']) 		||
 //   empty($_POST['mail_from']) 		||
 //   empty($_POST['zip']) 		||
 //   empty($_POST['phone']) 		||
 //   empty($_POST['message'])	||
 //   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
 //   {
 //	echo "No arguments Provided!";
 //	return false;
 //   }
 	
$name = $_POST['name'];
$company = $_POST['company'];
$email_address = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 	
 // create email body and send it	
 $to = 'Keith.jones@azubu.com'; // put your email
 $email_subject = "Inquiry from: $name ($company)";
 $email_body = 	  "Here are the details:\n \nName: $name \n".
 				  "Company: $company\n".
 				  "Email: $email_address\n".
 				  "Postal Code: $zip\n".
 				  "Phone: $phone\n".
 				  "Message: $message\n";
 $headers = "From: keith.jones@azubu.com\n";
 $headers .= "Reply-To: $email_address";	
 mail($to,$email_subject,$email_body,$headers);
 return true;			
 ?>
