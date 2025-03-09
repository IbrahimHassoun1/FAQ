<?php
require(__DIR__ . "/QuestionSkeleton.php");

class Question extends QuestionSkeleton
{
    private static $conn;
    public function __construct()
    {
        self::$conn = new mysqli("localhost", "root", "", "faq");
    }
    public function create()
    {
        $question = $this->getQuestion();
        $answer = $this->getAnswer();
        if (empty($question) || empty($answer)) {
            return ["status" => "error", "message" => "Please fill all the required fields"];
        }
        $query = "INSERT INTO questions (question, answer) VALUES (?, ?)";
        $stmt = self::$conn->prepare($query);
        $stmt->bind_param("ss", $question, $answer);
        $stmt->execute();
        if (self::$conn->affected_rows > 0) {
            return ["status" => "success", "message" => "Question created successfully"];

        } else {
            return ["status" => "error", "message" => "Question creation failed"];
        }
    }
}


?>