<?php
// send_code.php

// Generate a random code
$code = mt_rand(1000, 9999);

// Get the user's email from the form
$email = $_POST['email'];

// Send the code to the user's email
$subject = "Registration Code";
$message = "Your registration code is: " . $code;
$headers = "From: noreply@example.com";

if (mail($email, $subject, $message, $headers)) {
    echo "Code sent successfully!";
} else {
    echo "Failed to send the code.";
}
?>

