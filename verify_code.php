<?php
// verify_code.php

// Get the code entered by the user
$enteredCode = $_POST['code'];

// Check if the entered code matches the generated code
if ($enteredCode == $code) {
    // Redirect the user to main.php
    header("Location: loading.php");
    exit;
} else {
    echo "Invalid code.";
}
?>
