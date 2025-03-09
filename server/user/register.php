<?php
require('../models/User.php');

$user = new User();
$user->setFullName("example");
$user->setEmail("example@gmail.com");
$user->setPassword("12345");

$user->register();


?>