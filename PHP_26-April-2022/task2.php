<?php 
 $colors = array('white', 'green', 'red');
for($i=0;$i<count($colors); $i++){
echo "<ul>";
echo "<li>" .$colors[$i] ."</li>";
echo"</ul>";
}

echo "</br> "; 
echo "</br> "; 

 $cities = array('Italy' => 'Rome','Luxembourg' => 'Luxembourg', 'Belgium'=>'Brussels','Denmark'=> 'Copenhagen', 'Finland'=> 'Helsinki', 'France' =>  'Paris', 'Slovakia'=> 'Bratislava', 'Slovenia'=> 'Ljubljana', 'Germany' =>  'Berlin', 'Greece' =>  'Athens', 'Ireland'=> 'Dublin', 'Netherlands'=> 'Amsterdam', 'Portugal'=> 'Lisbon', 'Spain'=> 'Madrid'  );
foreach ($cities as $key =>  $value)  {
      echo "The capital of ".$key ." is " .$value ."<br>";
    }
    echo "</br> "; 
    echo "</br> "; 

 $color = array (4 => 'white', 6 => 'green', 11=> 'red');  
    echo    $color['4'];

    echo "</br> "; 
    echo "</br> "; 
    $fruits=array('d'=>'lemon','a'=>'orange','b'=>'banana','c'=>'apple');   
    asort( $fruits);
    foreach($fruits as $x => $x_value) {
        echo  $x . " = " . $x_value ."<br>";
  }
  echo "</br> "; 
  echo "</br> "; 
  
  $words= array("abcd","abc","de","hjjj","g","wer");
  $new_words = array_map('strlen', $words);
  echo "The shortest array length is " . min($new_words) .
  ". The longest array length is " . max($new_words).'.';
?>