<?php
require('../models/User.php');

$user = new User();
$user->setFullName("bob");
$user->setEmail("asdd");
$user->setPassword("asdd");

$response = $user->register();
echo ($response["message"]);

?>