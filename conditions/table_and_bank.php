<?php
function Table (){
  for ($x=1; $x<10; $x++)
   {
       $table[]=($x ."*". $x .'='. $x*$x . PHP_EOL);
   }
   return implode ($table);
}
   function bankDebit (){
   $y=15;
   for ($x=10000; $x<=1000000; $x=round($x +($x/10))) {
        $calculate[]=($y ++ .' год '. $x. PHP_EOL);
   }
    $statistic[]=($x. ' будет на счету, когда вкладчику будет '. $y .' года' . PHP_EOL);
    return implode ($calculate). PHP_EOL . implode ($statistic) ;
}

echo Table () . PHP_EOL;
echo bankDebit();