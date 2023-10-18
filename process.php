<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Validate the data (e.g., check if fields are not empty)
if (empty($name) || empty($email) || empty($message)) {
    // Handle validation errors, e.g., redirect to an error page
}
$to = 'marina.royzman@gmail.com';
$subject = 'New Contact Form Submission';
$headers = "From: $email\r\n";

// Send the email
mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully, you can redirect to a thank you page.
} else {
    // Handle email sending errors (e.g., display an error message).
}
