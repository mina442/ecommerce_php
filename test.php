<?php
include 'connect.php';
$name = $_POST['name'];


echo $name;

$stmt = $con->prepare("INSERT INTO `users`(`users_names`) VALUES ('$name')");
$stmt -> execute();
$users = $stmt -> fetchAll(PDO::FETCH_ASSOC);


