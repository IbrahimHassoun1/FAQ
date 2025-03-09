<?php

include("../../connection/connection.php");

if ($conn) {
    $sql = "CREATE TABLE users (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(30) NOT NULL,
        email VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Couldn't create table,error: " . $conn->error;
    }
    $conn->close();
}

?>