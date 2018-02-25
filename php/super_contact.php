<?php

$name_error = $email_error = "";

$to = 'nagabhushan.pai@gmail.com';    
$message = $_REQUEST['message'];

$person=$_REQUEST['sendername'];
$personemail=$_REQUEST['senderemail'];
$phone=$_POST['contact'];
$subject=$_REQUEST['sendersubject'];

$headers="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type=text/html; charset=utf-8" . "\r\n";
$headers.="From : <$personemail> \r\n";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$person)) 
	{
      $name_error = "Only letters and white space allowed"; 
	  echo "$name_error";
    }
	
	//check email
	 if(!filter_var($personemail, FILTER_VALIDATE_EMAIL)) 
	{
      $email_error = "Invalid email format"; 
	  echo "$email_error";
    }
}

if(isset($_POST['submit']))
{
if(mail($to,$subject,$message,$headers))
{
	echo "<script> 
	         alert('Your message sent successfully! Thank you $person, for your response'); 
	      </script>";
		  $person = $personemail = $phone= '';
}
else 
{
    echo "<script>alert('Sorry!! Could not send your mail!!Please retry');</script>";
    
}
}
?>