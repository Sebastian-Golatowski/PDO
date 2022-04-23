<?php
session_start();
if(isset($_SESSION['log'])){
    echo "<p style='color: green;'>jesteś zalogowany</p>";
    unset($_SESSION['log']);
}
?>