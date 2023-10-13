<?php
// Saving account records to the database
$con = mysqli_connect('localhost','root','','registered_accounts');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email', '$username', '$password')";

$rs = mysqli_query($con, $sql);

if($rs)
{
    // Redirecting to the thank_you.php page
    header("Location: thank_you.php");
    exit;
}
else
{
    echo "Registration failed. Please try again.";
}
?>