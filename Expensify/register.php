<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="registration-form">
    <h2>Register</h2>
    <h4>Just a few quick things to get started</h4>
    <form action="registration_process.php" method="post">
        <input type="email" id="email" name="email" placeholder="email" autocomplete="off" required><br><br>
        <input type="text" id="username" name="username" placeholder="@username" autocomplete="off" required><br><br>
        <input type="password" id="password" name="password" placeholder="password" required><br><br>
        <input type="submit" value="Register" onclick="showSuccessAlert()">
        
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </form>
</div>
<form action="registration_process.php" method="post">
    <script src="register.js">
    </script>
</body>
    </html>