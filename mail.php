<?php

    if(isset($_POST['btn-send']))
    {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        if(empty($username) || empty($email) || empty($subject) || empty($msg))
         {
            header('location:contact.php?error');
        }
        else  
         {
            $to = "olowookeremicheal9568@gmail.com";
              // Set the email headers
  $headers = "From: ".$email."\r\n".
  "Reply-To: ".$email."\r\n".
  "X-Mailer: PHP/".phpversion();
        
            if(mail($to, $subject, $msg, $headers))
            {
                header('location:contact.php?success');
            }
            
        }
    } 
        else
        {
            header('location:contact.php');
        }






?>