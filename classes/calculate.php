<?php

class Calculate
{
    /**
     * @param Question[] $questions
     */
    public static function printQuestions($questions)
    {   //Question::createQuestions();
        $number = 1; // номер вопроса

        foreach ($questions as $question) {
            echo "{$number}. {$question->getText()}\n\n";

            echo "Варианты ответов:\n";

            foreach ($question->getAnswers() as $letter => $answer) {
                echo "  {$letter}. {$answer}\n";
            }

            $number++;
        } //return implode($string);
    }

    public static function checkAnswers($questions, $answers)
    {
        /**
         * @param Questions[] $questions
         */
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
                $pointsMax += $question->getPoints();

                // Проверяем ответ
                if ($answer == $question->getCorrectAnswer()) {
                    // Добавляем баллы
                    $correctAnswers++;
                    $pointsTotal += $question->getPoints();
                } else {
                    // Неправильный ответ
                    $number = $i + 1;
                    $result = "Неправильный ответ на вопрос №{$number} ({$question->getText()}), Подсказка: \"{$question->getHelp()}\"\n";
                }
            }

            // Выведем итог
            $totals = "Правильных ответов: {$correctAnswers} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}\n";
        }
        return $result . PHP_EOL . $totals;
    }

}
