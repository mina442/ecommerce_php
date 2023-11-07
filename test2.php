<?php
include 'connect.php';
$data = array(
    "users_names"       => "mena",
    "users_email"       => "mena@m.com",
    "users_phone"       => "0987665",
    "users_verifiycode" => "0987665",

);

$count = insertData("users",$data);