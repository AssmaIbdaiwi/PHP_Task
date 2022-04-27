
<?php

for($i=0; $i<=30 ;$i++){ 
    echo " ".$i;
}

echo "</br> "; 
echo "</br> "; 

$number=1;
$zero=0;
$br=0;
$count=4;
for($i=0 ;$i<5 ;$i++){
echo " ".$number ;
$number++  ;
if ($i<4){
for($j=0 ;$j<=4 ;$j++){
   $br++;
   echo " ".$zero ;
if ($br==$count && $br<20){  
    echo " <br/>" ;
    $count=$count+4;
 
}
}}}

echo "</br> "; 
echo "</br> "; 

$num=5;
$counter=0;
$fact=1;
for($i=0;$i<$num;$i++){   
$counter++;
$fact=$fact*$counter;
}
echo $fact;

echo "</br> "; 
echo "</br> "; 

$start=0;
$second=1;
$end=21;
echo $start .", ".$second ;
for($i=0;$i<$end;$i++){
    $series=$start+$second;
    $start=$second; 
    $second=$series; 
    echo ", " .$series;
}
echo "</br> "; 
echo "</br> "; 

$output=1;
$c=1;
$numbers=1;
for($i=1;$i<=15; $i++){  
      
    echo " " .$numbers; 
 if($numbers==$c) { 
    echo " <br/>" ; 
    $output++; 
    $c=$numbers+$output;
    }    
$numbers++  ; 
}

?>