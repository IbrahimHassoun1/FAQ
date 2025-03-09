<?php
//make tables in case they don't exist
require_once(__DIR__ . "/../migrations/userMigrations.php");
require_once(__DIR__ . "/../migrations/questionMigrations.php");
//plant user seeds
require_once(__DIR__ . "/../../models/User.php");
$user = new User();
$user->setFullName("bob");
$user->setEmail("ihassoun73@gmail.com");

$user->setPassword("12345678");
$response = $user->register();
echo ($response["message"]);



?>