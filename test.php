<?php

$sender = "vijai_13@yahoo.com";
$recipient + "vijaikumar@zoho.com";
$subject = "mail test";
$message = "test message";
$headers = "From:" .$sender;

if (mail($recipient, $subject, $message))
{echo "message accepted";}
else {echo "error";}
?>