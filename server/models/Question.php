<?php
require(__DIR__ . "/QuestionSkeleton.php");

class Question extends QuestionSkeleton
{

    private static $connection;
    public function __construct()
    {
        self::$connection = new mysqli("localhost", "root", "", "faq");
    }
    public static function connectDatabase()
    {
        if (self::$connection == null) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "faq";
            $connection = new mysqli($servername, $username, $password, $dbname);
            self::$connection = $connection;
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
        }
        return self::$connection;
    }
    public function create()
    {
        $question = $this->getQuestion();
        $answer = $this->getAnswer();
        if (empty($question) || empty($answer)) {
            echo json_encode(["status" => "error", "message" => "Please fill all the required fields"]);
            return ["status" => "error", "message" => "Please fill all the required fields"];
        }
        $query = "INSERT INTO questions (question, answer) VALUES (?, ?)";
        $connection = self::connectDatabase();
        $stmt = self::$connection->prepare($query);
        $stmt->bind_param("ss", $question, $answer);
        $stmt->execute();
        if (self::$connection->affected_rows > 0) {
            echo json_encode(["status" => "success", "message" => "Question created successfully"]);
            return ["status" => "success", "message" => "Question created successfully"];

        } else {
            echo json_encode(["status" => "error", "message" => "Question creation failed"]);
            return ["status" => "error", "message" => "Question creation failed"];
        }
    }
    public static function getAllQuestions()
    {

        if ($conn = self::connectDatabase()) {
            $sql = "SELECT * FROM questions";
            $query = $conn->query($sql);
            $results = array();
            if ($query && $query->num_rows > 0) {

                while ($row = $query->fetch_assoc()) {
                    $results[] = $row;
                }
                return json_encode(["result" => $results, "message" => "Questions fetched successfully", "status" => "success"]);
            } else {
                return json_encode(["result" => [], "message" => "No questions found", "status" => "error"]);
            }
        } else {
            return json_encode(["result" => [], "message" => "couldn't connect to db", "status" => "error"]);
        }


    }
}


?>