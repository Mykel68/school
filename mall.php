<?php

$username = $_POST['uname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$mailheader = "from:".$name."<".$email.">\r\n";
$recipient = "olowookeremicheal9568@gmail.com";

mail($recipient, $subject, $msg, $mailheader)
or die("error");
   echo"message send";


?>