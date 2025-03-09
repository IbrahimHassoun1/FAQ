<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    require(__DIR__ . "/../models/User.php");
    $user = new User();
    $user->setEmail($data["email"]);
    $user->setPassword($data["password"]);
    $response = $user->login();
    echo ($response);
    return $response;
}

?>