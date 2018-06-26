<?php
include_once "questions.php";
include_once "calculate.php";

$questions[] = new Question("Какая планета располагается четвертой по счету от Солнца?", 10, ['a' => 'Венера', 'b' => 'Марс', 'c' => 'Юпитер', 'd' => 'Меркурий'], 'b', 'Жди ночь и смотри на небо!');
$questions[] = new Question("Какой город является столицей Великобритании?", 5, ['a' => 'Париж', 'b' => 'Москва', 'c' => 'Нью-Йорк', 'd' => 'Лондон'], 'd', 'Куда хочет поехать твоя самая тупая подруга?');
$questions[] = new Question("Какая планета располагается четвертой по счету от Солнца?", 10, ['a' => 'Венера', 'b' => 'Марс', 'c' => 'Юпитер', 'd' => 'Меркурий'], 'b', 'Жди ночь и смотри на небо!');

//var_dump($questions);

Calculate::printQuestions($questions);
$answers = ['b', 'd', 'a'];


//todo тут не нужно присваивание(=) - просто выводим результат работы checkAnswers
echo $checAns = Calculate::checkAnswers($questions, $answers);