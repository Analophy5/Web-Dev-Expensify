<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $registrationSuccessful = true;
    if ($registrationSuccessful) {
        header("Location: thank_you.php");
        exit;
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
