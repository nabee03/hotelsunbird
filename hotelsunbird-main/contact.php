<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email sending logic here

    $to = "nabinadhikari222@gmail.com";
    $headers = "From: $email";
    $message = "Name: $name\n.Email: $email\n.Subject: $subject\n.Message: $message";

    // Send the email
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>window.alert('Message Sent Successfully!');</script>";
        echo "<script>window.open('index.html','_self');</script>";
    } else {
        echo "<script>window.alert('Error Found!');</script>";
        echo "<script>window.open('contact.html','_self');</script>";
    }
}
?>
