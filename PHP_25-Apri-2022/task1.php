<?php
$year= 2000;
if ($year%4== 0 && $year%100== 0 && $year%400== 0){
    echo "This year is a leap year";
}
else 
{
    echo "This year is not a leap year";
}
echo "</br>"; 
$season= 15;
if ($season<20){
    echo "It's winter time!";
}
else 
{
    echo "It's summer time!";
}
echo "</br>"; 

$num1=2;
$num2=2;
if ($num1==$num2){
    $sum=($num1 + $num2)*3;
}else{
$sum= $num1 + $num2;
}
echo $sum;
echo "</br>"; 

$fnum=10;
$snum=20;
$SUM=$fnum+$snum;
if ($SUM==30){
    echo $SUM;
}else{
    echo "false";
}

echo "</br>"; 

$mult=(abs(-15));
if ($mult%3==0){
    echo "true";
}else{
    echo "false";
}

echo "</br>"; 

$num=20;
if ($num>=20 && $num<=50){
    echo "true";
}else{
    echo "false";
}

echo "</br> "; 

$numA=1;
$numB=5;
$numC=9;
if ($numA>$numB && $numA>$numC )
echo $numA;
elseif($numB >$numC )
echo $numB;
else echo $numC;

echo "</br>"; 

$kw=75;

if ($kw<=50 )
$bill=$kw*2.5;
elseif($kw<50 && $kw<=100)
$bill= ($kw- 50)*5+50*2.5 ;
elseif( $kw<100 &&$kw<250)
$bill= ($kw-(150))*6.2+100*5+50*2.5 ;
else
{$bill= ($kw-(250))*7.5+100*6.2+100*5+50*2.5 ;}
echo $bill;

 ?>


