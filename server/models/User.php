<?php
require(__DIR__ . "/UserSkeleton.php");

class User extends UserSkeleton
{
    private static $connection;
    public function __construct()
    {
        parent::__construct();
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



    public function register()
    {
        $conn = self::connectDatabase();
        $fullname = $this->getFullName();
        $email = $this->getEmail();
        $password = $this->getPassword();
        if (empty($fullname) || empty($email) || empty($password)) {
            return [
                "status" => "error",
                "message" => "Please fill all the required fields"
            ];
        }

        $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {

            return [
                "status" => "error",
                "message" => "Failed to prepare the SQL statement: " . $conn->error
            ];
        }


        $stmt->bind_param("sss", $fullname, $email, $password);


        if (!$stmt->execute()) {

            return [
                "status" => "error",
                "message" => "Failed to execute the SQL statement: " . $stmt->error
            ];
        }


        if ($stmt->affected_rows > 0) {
            return [
                "status" => "success",
                "message" => "User registered successfully"
            ];
        } else {
            return [
                "status" => "error",
                "message" => "User registration failed. Please check the data or try again."
            ];
        }
    }

}
?>