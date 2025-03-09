<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    require("../models/Question.php");
    $question = new Question();
    $question->setQuestion($data["question"]);
    $question->setAnswer($data["answer"]);
    $response = $question->create();
    echo ($response["message"]);
    return $response;
}

?>