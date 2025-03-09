<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    require('../models/User.php');

    $user = new User();
    $user->setFullName($data["full_name"]);
    $user->setEmail($data["email"]);
    $user->setPassword($data["password"]);
    echo $user->register();
    return $user->register();

}


?>