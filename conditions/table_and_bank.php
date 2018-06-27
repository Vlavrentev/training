<?php
//todo неточное название функции Table. переименовать надо таким образом, чтобы только поимени функции уже можно было
//todo понять что она делает
//todo названия функций с маленькой буквы (стандарт PSR-7)


function multiplicationTable (){
    //todo непонятные имена переменных $x
    for ($multiplier=1; $multiplier<10; $multiplier++)
   {
       $table[]=($multiplier ."*". $multiplier .'='. $multiplier*$multiplier . PHP_EOL);
   }
   return implode ($table);
}
   function bankDeposit (){
   $years=15;
       //todo непонятные имена переменных $x, $y
   for ($deposit=10000; $deposit<=1000000; $deposit=round($deposit +($deposit/10))) {
        $calculate[]=($years ++ .' год '. $deposit. PHP_EOL);
   }
    $statistic[]=($deposit. ' будет на счету, когда вкладчику будет '. $years .' года' . PHP_EOL);
    return implode ($calculate). PHP_EOL . implode ($statistic) ;
}

echo multiplicationTable () . PHP_EOL;
echo bankDeposit();
