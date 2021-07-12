<?php
if(!isset($_POST['submit'])){
    echo "error, need to submit the form";
}

$name = $_POST['name'];
$vis_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(empty($name) || empty($vis_email)){
    echo "Name and Email must have values";
    exit;
}

$email_from = 'kalamakiefer123@gmail.com';
$email_subject = 'New Form Submission: $subject';
$email_body = "New Email from $name. \n". 
              "email address is: $vis_email\n". 
              "message is: \n $message". 

$to = "kalamakiefer@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
echo "Email Sent! Well get back to you as soon as we can!";