<?php

include_once "database.php";

$email = $_post["email"];
$pass = $_post["pass"];

$sql=  "INSERT INTO users  (email , pass) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email,$pass]);

header(header:"location:users.php");