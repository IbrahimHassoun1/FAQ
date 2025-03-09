<?php
class QuestionSkeleton
{
    public $sd;
    public $id;
    public $question;
    public $answer;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }
    public function getQuestion()
    {
        return $this->question;


    }
    public function getAnswer()
    {
        return $this->answer;
    }



    public function setId($id)
    {
        $this->id = $id;
    }
    public function setQuestion($question)
    {
        $this->question = $question;
    }
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

}

?>