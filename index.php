<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="window.location.href='proces/login.php'">LOGIN</button>
    <br>
    <button onclick="window.location.href='proces/register.html'">REGISTER</button>
    <?php
    if(isset($_SESSION['status'])){
        echo "<p style='color: green;'>".$_SESSION['status']."</p>";
        unset($_SESSION['status']);
    }
    ?>
</body>
</html>