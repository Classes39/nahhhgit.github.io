<?php

echo "
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #666;
}

input[type=\"text\"],
input[type=\"email\"],
input[type=\"password\"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 20px;
}

input[type=\"submit\"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

input[type=\"submit\"]:hover {
    background-color: #45a049;
}

.error-message {
    color: red;
    margin-top: 5px;
}
</style>
";

// JavaScript code for enhanced styling and validation
echo "
<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var errorContainer = document.getElementById('error-container');
        var errorMessage = '';

        // Perform form validation here
        if (name === '') {
            errorMessage += 'Name is required.<br>';
        }

        if (email === '') {
            errorMessage += 'Email is required.<br>';
        }

        if (password === '') {
            errorMessage += 'Password is required.<br>';
        }

        if (errorMessage !== '') {
            errorContainer.innerHTML = errorMessage;
        } else {
            // Redirect to the success page
            window.location.href = 'verify.php';
        }
    });
});
</script>
";

echo "
<div class=\"container\">
    <h1>Registration Form</h1>
    <form action=\"redirect.html\" method=\"post\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" required>

        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>

        <input type=\"submit\" value=\"Register\">
    </form>
</div>
";

echo "<div id=\"error-container\" class=\"error-message\"></div>";
?>
