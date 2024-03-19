<?php

$fullname = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:" . $fullname . "<" . $email . ">\r\n";

$recipient = "kharafalcon593@gmail.com";

mail($recipient,'websiteQuery', $message, $mailheader) or die("Error!");

?>