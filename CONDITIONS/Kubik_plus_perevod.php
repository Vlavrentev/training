<?php

        $rub = 620; 
        $usd = 62;
        $hum = rand (1,6)+rand (1,6);
      $comp = rand (1,6)+rand (1,6);
        function funck ($rub, $usd, $hum, $comp) {
        echo $rub .' рублей это '. $rub / $usd . ' долларов ' . PHP_EOL; 
        echo 'Случайное число на кубике - '. rand (1,6) .PHP_EOL;
      
    if ($hum > $comp) {
        print_r ('Человек выйграл комп со счетом '. $hum .' - '. $comp);
    }
    elseif ($hum<$comp) {
        print_r ('Человек проиграл компу со счетом '. $hum .' - '. $comp);
    } 
   else {
       print_r ("Ничья: $hum - $comp");
   }
   echo PHP_EOL;

}
echo funck ($rub, $usd, $hum, $comp);