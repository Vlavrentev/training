<?php

class Question
{

    private $text;           // текст вопроса
    private $points = 5;     // число баллов, по умолчанию 5 todo число 5 по умолчанию никогда не будет. подумай почему и сделай правильно
    private $answers;        // варианты ответов
    private $correctAnswer;  // правильный ответ
    private $help;           // подсказка

    public function __construct($text, $points, $answers, $correctAnswer, $help)
    {
        $this->text = $text;
        $this->points = $points; // 10 баллов за ответ todo так 10 или 5 ?
        $this->answers = $answers; // Варианты ответа
        $this->correctAnswer = $correctAnswer; // Правильный ответ
        $this->help = $help; // подсказка


    }

    public function getText()
    {
        return $this->text;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function getHelp()
    {
        return $this->help;
    }
}
