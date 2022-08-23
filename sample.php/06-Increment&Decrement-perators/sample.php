<?php
$x=5;
$x=$x+2;
echo $x."<br>";
$x+=2;
echo $x."<br>";
################
$var=2;
$var=$var+1;
echo $var."<br>";
$var++;
echo $var."<br>";
++$var;
echo $var."<br>";

################
$var=4;
$var=$var-1;
echo $var."<br>";
$var--;
echo $var."<br>";
--$var;
echo $var."<br>";


################
$a=3;
$b=4;
//pre normal all
//$result=($a+1)*2 +($b-1);
$result=++$a *2 + --$b;//4*2+3
echo $result."<br>";

//post
$v1=2;

$res=($v1+1)*2-1;
//$res=$v1++*2-1;//

echo $res."<br>";

$v2=2;
$r=$v2++*2 -1 +$v2;//2*2-1+3=6
echo $r."<br>";
$y=2;
$y2=2;
$v=$y++ *2 +--$y2 +$y;
echo $v."<br>";
?>