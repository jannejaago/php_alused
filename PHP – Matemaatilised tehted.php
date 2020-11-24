<?php
/*
	02 - PHP - Matemaatilised tehted
	Janne Jaago
	24.11.2020
*/

//tehted
$x=8;
$y=2;
$pluss=$x+$y;
$miinus=$x-$y;
$korrutamine=$x*$y;
$jagamine=$x/$y;
$jaak=$x%$y;

echo $x.'+'.$y.'='.$pluss.'<br>';
echo $x.'-'.$y.'='.$miinus.'<br>';
echo $x.'*'.$y.'='.$korrutamine.'<br>';
echo $x.'/'.$y.'='.$jagamine.'<br>';
echo $x.'%'.$y.'='.$jaak.'<br>';

//teisendamine
$mm=589;
$cm=$mm/10;
$m=$mm/1000;

printf($mm.' millimeetrit on %0.2f sentimeetrit<br>', $cm);
printf($mm.' millimeetrit on %0.2f meetrit<br>', $m);

//kolmnurk
$a=4;
$b=3;
$c=5;
$ymbermoot=$a+$b+$c;
$pindala=($a*$b)/2;
printf('Kolmnurga ümbermõõt on: %d<br>', $ymbermoot);
printf('Kolmnurga pindala on: %d<br>', $pindala);