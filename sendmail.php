<?php
if(isset($_POST['submit'])){
    $to = "webshack2018@gmail.com"; // Your email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: ".$name." <".$email.">". "\r\n" .
    "Reply-To: ".$email. "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: ".$name."\nEmail: ".$email."\n\nMessage:\n".$message;

    if(mail($to, $subject, $mailBody, $headers)){
        echo "<script>alert('Message Sent Successfully!');</script>";
    } else {
        echo "<script>alert('Message Sending Failed!');</script>";
    }
}
?>
