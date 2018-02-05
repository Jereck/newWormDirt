<?php

if(isset($_POST['submit'])) {
    $to = "wormdirt@wormdirtdevelopment.com";
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' . $_POST['message'];

    $headers = "From: " . $from;
    mail($to, $subject, $message, $headers);

    header("Location: http://wormdirtdevelopment.com");
}

?>