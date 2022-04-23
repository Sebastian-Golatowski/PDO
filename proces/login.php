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
    <form method="post" action="php/proceslog.php">
        login:
        <input type="text" name="login">
        <br>
        password:
        <input type="password" name="passwd">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_SESSION['error'])){
            echo "<p style='color: red;'>jest problem z logowaniem</p>";
            unset($_SESSION['error']);
        }
    ?>
</body>
</html>