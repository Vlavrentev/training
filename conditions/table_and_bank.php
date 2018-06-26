<?php
//todo неточное название функции Table. переименовать надо таким образом, чтобы только поимени функции уже можно было
//todo понять что она делает
//todo названия функций с маленькой буквы (стандарт PSR-7)


function Table (){
    //todo непонятные имена переменных $x
    for ($x=1; $x<10; $x++)
   {
       $table[]=($x ."*". $x .'='. $x*$x . PHP_EOL);
   }
   return implode ($table);
}
   function bankDebit (){
   $y=15;
       //todo непонятные имена переменных $x, $y
   for ($x=10000; $x<=1000000; $x=round($x +($x/10))) {
        $calculate[]=($y ++ .' год '. $x. PHP_EOL);
   }
    $statistic[]=($x. ' будет на счету, когда вкладчику будет '. $y .' года' . PHP_EOL);
    return implode ($calculate). PHP_EOL . implode ($statistic) ;
}

echo Table () . PHP_EOL;
echo bankDebit();