<?php
include("../../connection/connection.php");

if ($conn) {
    $sql = "CREATE TABLE questions (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        question VARCHAR(255) NOT NULL,
        answer VARCHAR(500) NOT NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "Table questions created successfully";
    } else {
        echo "Couldn't create table,error: " . $conn->error;
    }
    $conn->close();
}

?>