<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Home Page</title> 
    <link rel="stylesheet" href="css/homepage.css">
</head> 
<body>
    <div id="greeting">
        <?php
        // Retrieve the username from the query parameter
        $username = $_GET['username'];

        // Display the greeting with the username
        echo "Welcome, " . htmlspecialchars($username) . "!";
        ?>
    </div>

    <section class="container">
        <div class="records" id="expenseDetails">
         </div>
        <div class="img">
            <img src="images/goldcoins.jpg" alt="coins">
        </div>

        <button class="add-button" id="addButton">
            <i class="fas fa-plus"></i>
        </button>
    </section>

     <script src="homepage.js"></script>
</body> 
</html>

   