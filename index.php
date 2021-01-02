<?php

include_once("index.html");

$to = "patpal4089@gmail.com";
$subject = "email from my website:$sebject";



$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$headers .= "content-type:text/html;\r\n";
$headers .= "from:$email";


mail($to,$subject,$comment,$headers);
echo "thankyou,your email has been sent."
?>
