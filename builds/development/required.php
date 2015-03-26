<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: "antoniomontalvo.me"'; 
    $to = 'antonio.montalvo.87@gmail.com'; 
    $subject = 'Hello';
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    mail ($to, $subject, $body, $from);
?>