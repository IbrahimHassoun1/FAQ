<?php

require("../models/Question.php");
$question = new Question();
$question->setQuestion("What is the capital of France?");
$question->setAnswer("Paris");
$response = $question->create();
echo ($response["message"]);

?>