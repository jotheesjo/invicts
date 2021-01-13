<?php
$to = "jothees.clouddreams@gmail.com"; 
if(isset($_POST['quotename'])){
	$from = $_POST['quoteemail']; 
	$name = $_POST['quotename'];
	$email = $_POST['quoteemail'];
	$phone = $_POST['quotephone'];
	$subject1= $_POST['quotesubject'];
	$msg = $_POST['quotemessage'];

	$message = "
	Name: $name \n
	Email Id: $email \n
	Mobile: $phone \n
	Subject: $subject1 \n
	Message: $msg \n";
	$headers = "From:" . $from;
	$subject="Get a Quote";
	if(mail($to,$subject,$message,$headers))    
	{
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
	else{
        echo "Error on sending your mail... Plese try again";
    }
}
if(isset($_POST['freeemail'])){
	$from = $_POST['quoteemail']; 
	$name = $_POST['freename'];
	$email = $_POST['freeemail'];
	$phone = $_POST['freemobile'];
	$msg = $_POST['message'];
	$message = "
	Name: $name \n
	Email Id: $email \n
	Mobile: $phone \n
	Message: $msg \n";
	$headers = "From:" . $from;
	$subject="Get a Free consultation";
	if(mail($to,$subject,$message,$headers))    
	{
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
	else{
        echo "Error on sending your mail... Plese try again";
    }
}

if(isset($_POST['contactmessage'])){
	$from = $_POST['contactemail']; 
	$name = $_POST['contactname'];
	$email = $_POST['contactemail'];
	$phone = $_POST['contactmobile'];
	$subject1= $_POST['contactsubject'];
	$msg = $_POST['contactmessage'];

	$message = "
	Name: $name \n
	Email Id: $email \n
	Mobile: $phone \n
	Subject: $subject1 \n
	Message: $msg \n";
	$headers = "From:" . $from;
	$subject="Get a Quote";
	if(mail($to,$subject,$message,$headers))    
	{
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
	else{
        echo "Error on sending your mail... Plese try again";
    }
}
?>