<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$normal= $_POST['normal'];
$company= $_POST['company'];
$message= $_POST['message'];
$to = "upwaygroup@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."/r/n normal = " . $normal ."\r\n Message =" . $message;
$headers = "From: noreply@UPWAYTRANSPORTATIONLLC.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("index.html");
?>