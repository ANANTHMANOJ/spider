<?php

$to = "nagabhushan.pai@gmail.com";    
$message = $_POST['message'];
$subject=$_POST['sendersubject'];
$personemail=$_POST['senderemail'];
$person=$_POST['sendername'];
$phone=$_POST['contact'];
$headers="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type=text/html; charset=utf-8" . "\r\n";
$headers="From : <$personemail> \r\n";
if(isset($_POST['submit']))
{
if(mail($to,$subject,$message, $headers))
{
	echo "<script> 
	         alert('Your message sent successfully! Thank you for your response'); 
	      </script>";
}
else 
{
    echo "<script>alert('Sorry!! Could not send your mail!!Please retry');</script>";
    
}
}

?>
