<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];  

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $phone = urldecode($phone);
    $email = urldecode($email);
    $message = urldecode($message);
    
    $name = trim($name);
    $phone = trim($phone);
    $email = trim($email);
    $message = trim($message);
    
    $to = "d.shvarev@mail.ru";
    $from = trim($_POST['email']);

    $headers = "От: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion(); 

    

?>