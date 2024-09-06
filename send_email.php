<?php
// Replace with your email address
$to = "giorgos.ppgs@gmail.com";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Email subject
$subject = "Contact Form Submission";

// Email body
$body = "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Phone: " . $phone . "\n";
$body .= "Message: " . $message;

// Email headers
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Your email has been sent successfully.";
} else {
    // Email sending failed
    echo "An error occurred while sending your email. Please try again later.";
}
?>