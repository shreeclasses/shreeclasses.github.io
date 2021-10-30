<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];

$to = "shreeclasses2244@gmail.com"

$subject = " Mail From Our Website";
$txt = "Name : ". $name . "\r\nEmail : ". $email . "\r\nMobile Number : ". $number . "\r\nMessage : ". $msg ;
$headers = "From: noreply@shreeclasses.net" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>