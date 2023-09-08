


<?php
session_start();

if (isset($_SESSION['generatedPassword'])) {
    $password = $_SESSION['generatedPassword'];
    echo '<h1>Your Strong Password:</h1>';
    echo '<p>' . $password . '</p>';
} else {
    echo '<p>Password not available.</p>';
}

?>