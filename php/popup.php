<?php

$to = "nagabhushan.pai@gmail.com";  
$subject="Client Response";

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$you_are=$_POST['position'];//radio value

$study=array();
$course=$_POST['course'];//checkbox value
$i=implode(',',$course);

/*
$i;
foreach($course as $c)
{ 
  $study[$i]=$c;
  $i=$i+1;
}
*/

$atttempt=$_POST['due'];//radio value

$article=$_POST['article'];//radio button retrial 
$initial=$_POST['attempt'];//radio button retrial 

$message="Name :"."$name"."\n".
         "Contact Number: "."$mobile"."\n".
		 "Personalization:"."$you_are"."\n".
		 "Courses that are looking for:"."$i"."\n".
		 "Next attempt Due date"."$attempt"."\n".
		 "Article-ship"."article"."\n".
		 "Number of attempts:"."$initial";
		 
$headers="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type=text/html;charset=utf-8" . "\r\n";
$headers .="From : <$name> \r\n";

if(mail($to,$subject,$message))
{
	echo "<script> 
	         alert('You submitted successfully! Thank you for your response'); 
	      </script>";
}
else 
{
    echo "<script>alert('Sorry!! Could not send your mail!!Please retry');</script>";
    
	}
?>