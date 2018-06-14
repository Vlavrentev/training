<?php


class Question
{

    public $text;           // текст вопроса
    public $points = 5;     // число баллов, по умолчанию 5
    public $answers;        // варианты ответов
    public $correctAnswer;  // правильный ответ
    public $help;  // подсказка


    public static function createQuestions()
    {
        $questions = [];
        $q = new Question;
        $q->text = "Какая планета располагается четвертой по счету от Солнца?";
        $q->points = 10; // 10 баллов за ответ
        $q->answers = array('a' => 'Венера', 'b' => 'Марс', 'c' => 'Юпитер', 'd' => 'Меркурий'); // Варианты ответа
        $q->correctAnswer = 'b'; // Правильный ответ
        $q->help = 'Жди ночь и смотри на небо!'; // подсказка
        $questions[] = $q;

        $q = new Question;
        $q->text = 'Какой город является столицей Великобритании?';
        $q->points = 5;
        $q->answers = array('a' => 'Париж', 'b' => 'Москва', 'c' => 'Нью-Йорк', 'd' => 'Лондон');
        $q->correctAnswer = 'd';
        $q->help = 'Куда хочет поехать твоя самая тупая подруга?'; // подсказка
        $questions[] = $q;


        $q = new Question;
        $q->text = 'Кто придумал теорию относительности?';
        $q->points = 30;
        $q->answers = array('a' => 'Джон Леннон', 'b' => 'Джим Моррисон', 'c' => 'Альберт Эйнштейн', 'd' => 'Исаак Ньютон');
        $q->correctAnswer = 'c';
        $q->help = 'Этим парнем был...'; // подсказка
        $questions[] = $q;

        return $questions;
    }

    public static function printQuestions($questions)
    {
        $number = 1; // номер вопроса

        foreach ($questions as $question) {
            echo "{$number}. {$question->text}\n\n";

            echo "Варианты ответов:\n";

            foreach ($question->answers as $letter => $answer) {
                echo "  {$letter}. {$answer}\n";
            }

            $number++;
        }
    }
    public static function checkAnswers($questions, $answers)
    {
        {
            // Проверим, что число ответов равно числу вопросов (защищаемся от ошибки)
            if (count($questions) != count($answers)) {
                die("Число ответов и вопросов не совпадает\n");
            }

            $pointsTotal = 0; // сколько набрано баллов

            // сколько можно набрать баллов при всех правильных ответах
            $pointsMax = 0;
            // сколько отвечено верно
            $correctAnswers = 0;

            $totalQuestions = count($questions); // Сколько всего вопросов

            // Цикл для обхода вопросов и ответов
            for ($i = 0; $i < count($questions); $i++) {
                $question = $questions[$i]; // Текущий вопрос
                $answer = $answers[$i]; // текущий ответ

                // Считаем максимальную сумму баллов
                $pointsMax += $question->points;

                // Проверяем ответ
                if ($answer == $question->correctAnswer) {
                    // Добавляем баллы
                    $correctAnswers ++;
                    $pointsTotal += $question->points;
                } else {
                    // Неправильный ответ
                    $number = $i + 1;
                    echo "Неправильный ответ на вопрос №{$number} ({$question->text}), Подсказка: \"{$question->help}\"\n";
                }
            }

            // Выведем итог
            echo "Правильных ответов: {$correctAnswers} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}\n";
        }
    }

}
$questions = new Question();
$questions = Question::createQuestions();
Question::printQuestions($questions);
$answers = array('b', 'd', 'a');
Question::checkAnswers($questions, $answers);
