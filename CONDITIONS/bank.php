<?php
function funck (){
  for ($x=1; $x<10; $x++)
   {
       print_r ($x ."*". $x .'='. $x*$x . PHP_EOL);
   }
   $y=15;
   for ($x=10000; $x<=1000000; $x=round($x +($x/10))) {
        print_r ($y ++ .' год '. $x. PHP_EOL);
   }
    print_r ($x. ' будет на счету, когда вкладчику будет '. $y .' года' . PHP_EOL);
}
echo funck ();