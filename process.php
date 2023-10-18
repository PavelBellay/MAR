<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add your email sending code here, or save the form data to a database.
    // Remember to validate and sanitize the input data for security.

    $response = "Thank you, $name! Your message has been received.";
    echo $response;
} else {
    echo "Access denied.";
}
?>
