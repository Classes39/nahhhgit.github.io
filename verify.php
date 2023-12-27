<?php
    // Code converted from HTML to PHP
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>Registration Form</title>';
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
    echo '</head>';
    echo '<body>';
    echo '<div class="container">';
    echo '<h2>Registration Form</h2>';
    echo '<form action="send_code.php" method="post">';
    echo '<div class="form-group">';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" class="form-control" id="email" name="email" required>';
    echo '</div>';
    echo '<button type="submit" class="btn btn-primary">Send Code</button>';
    echo '</form>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
?>
