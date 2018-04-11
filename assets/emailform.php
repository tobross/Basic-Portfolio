<?php
if(lisset($_POST['submit']))
{
    //This page should not be accessed directly. You must submit the form.
    echo "error; You need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'TobeyNRT@gmail.com';//<--Email to receive form submission.
$email_subject = "Email from your Portfolio!";
$email_body = "You have received a new message from $name.\n".
    "email address: $visitor_email\n".
    "Here is what they said:\n $message".

$to = "TobeyNTR@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank you page!
?>