<?php

$insert = $pdo->prepare("INSERT INTO users (`login`, `passwd`, `name`) VALUES (?, ?, ?)");

$select = $pdo->prepare("SELECT id, `name` FROM users WHERE `login`=? and passwd = ?");


?>