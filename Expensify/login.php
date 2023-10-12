<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Login Form</title>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <h4>Hello, Welcome Back!</h4>
    <form>
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <button id = "bttn" type="submit">Login</button>
    </form>
    <form action="login_process.php" method="post">
    <p class="register-link">Don't have an account? <a href="register.php">Register</a></p>
  </div>
</body>
</html>