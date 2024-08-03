<?php

$name - $_POST['name'];
$name - $_POST['email'];
$name - $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "anastasiya.zaitsava@gmai.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error");

echo"message send";

?>