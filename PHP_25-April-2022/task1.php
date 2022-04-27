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

$kw=200;

if ($kw<=50 )
$bill=$kw*2.5;
elseif($kw<50 && $kw<=100)
$bill= ($kw- 50)*5+50*2.5 ;
elseif( $kw<100 &&$kw<250)
$bill= ($kw-(150))*6.2+100*5+50*2.5 ;
else
{$bill= ($kw-(250))*7.5+100*6.2+100*5+50*2.5 ;}
echo $bill;
echo "</br>";
$vote=18;
if ($vote<18){
    echo "is no eligible to vote";
}else{
    echo "is eligible to vote";
}

echo "</br> "; 

$check=0;
if($check<0)
echo "the number is negative";
elseif($check>0)
echo "the number is positive";
else
echo "the number is zero";


echo "</br> "; 

$a=5;
$b=2;
$operatore="*";
if ($operatore =="+")
$calc=$a+$b;
elseif($operatore =="-")
$calc=$a-$b;
elseif($operatore =="*")
$calc=$a*$b;
elseif($operatore =="/")
$calc=$a/$b;
else 
echo "calculation error";
echo $calc;

echo "</br> "; 

$arr=[60,86,95,63,55,74,79,62,50];
$thesum=0;
for ($i=0; $i <(count($arr)) ; $i++) { 
    $thesum+= $arr[$i];
$avg= $thesum/count($arr);
}
echo "The average is $avg "  ;
if ($avg<60)
echo "the score is F";
elseif ($avg<70)
echo "the score is D";
elseif ($avg<80)
echo "the score is C";
elseif ($avg<90)
echo "the score is B";
elseif ($avg<100)
echo "the score is A";






 ?>


