<?php

    $to      = "sanojkumaroad@gmail.com";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $visitor_email = $_POST['email'];

    $email_body =   "User Name: $name.\n".
                    "User Subject: $subject.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message";

    $headers = 'From: '.$_POST['email'];

    mail($to, $subject, $email_body, $headers);
?>