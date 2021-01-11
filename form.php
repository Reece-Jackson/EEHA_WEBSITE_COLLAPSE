<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'reecejackson20@hotmail.com';
    $email_subject = "Website Contact from $name";
    $email_body = "$name.\n"
                " Email: $email.\n"
                "$message";
    $email_to = 'reecejackson0199@gmail.com';

    $headers = "From: $email_from\r\n";
    $headers. = "Reply-To: $email \r\n";

    mail($email_to, $email_subject, $message, $headers);

    header("Location: index.html");
    
?>