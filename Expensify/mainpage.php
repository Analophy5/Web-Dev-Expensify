<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/mainpage.css">
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="images/goldcoins.jpg" alt="coins">
        </div>
        <div class="bio">
            <div class="appname">
                <p>Expensify</p>
            </div>
            <div class="subcontent">
                <p>Track your spending, save more,<br>live better</p>
            </div>
            <div class="startbtn">
                <button id="getStartedButton">Get Started</button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("getStartedButton").addEventListener("click", function() {
            var userLoggedIn = false;

            if (userLoggedIn) {
                window.location.href = "login.php";
            } else {
                window.location.href = "register.php";
            }
        });
    </script>
</body>
</html>
