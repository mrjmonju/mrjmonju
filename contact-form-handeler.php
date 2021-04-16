<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone_number= $_POST['phone_number'];
$message= $_POST['message'];
$to = "mrjmonju@mail.com";
$subject = "Mail From My WebSite";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Phone = ". $phone_number . "\r\n 
    Message =" . $message;
$headers = "From: mrjmonju1@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>