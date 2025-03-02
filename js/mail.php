<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contact-name']);
    $phone = htmlspecialchars($_POST['contact-phone']);
    $email = htmlspecialchars($_POST['contact-email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['contact-message']);

    $to = "rhythmjain.2005@gmail.com";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $emailBody = "
        <h2>New Contact Message</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    ";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request!";
}
?>
