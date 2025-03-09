<?php
require(__DIR__ . "/../models/User.php");
$user = new User();
$user->setFullName("example");
$user->setEmail("example@gmail.com");
$user->setPassword("12345");

$message = $user->login();
echo ($message);
?>