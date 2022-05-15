<?php
// include "fruit.php";
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$dbname= 'fruits';
$connect= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($connect -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connect -> connect_error;
    exit();
  }else{
      echo "Success";
  }

$id= $_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$fridge=$_POST['fridge'];


 $query = " INSERT INTO fruits (id, name,price,color,Quantity,fridge_storage)
 VALUES ('$id','$name','$price','$color','$quantity','$fridge')";
 
 if (mysqli_query($connect,$query))
 {
     echo "new record in fruits";
 }
 else
 {
     echo "error:" .mysqli_error($connect);
 }



 echo  ' <table style="border: solid 1px ;">
 <thead>
   <tr>
     <th>ID </th>
     <th>Name</th>
     <th >Price</th>
     <th >Color</th>
     <th >Quantity</th>
     <th >Fridge storage for </th>
   </tr>
 </thead>
 <tbody> ';
 $code_sql = "SELECT id FROM fruits ";   
    $code_query = mysqli_query($connect,$code_sql) ;
 while($rows = mysqli_fetch_object($code_query)){
    if(isset($_POST['view'])) { 
        echo " <tr> <td>". $id
        ."</td> <td> ".$name
         ."</td> <td>". $price.
    "</td> <td> ". $color
    ."</td> <td> ". $quantity
    ."</td> <td> " . $fridge."</td> </tr> ";
  '</tbody> </table> <br>';
    }}

if(isset($_post['delete'])) {
    $query = "DELETE FROM `fruits` WHERE  `id` = '$id' ";
    $deletes =  mysqli_query($connect , $query);
    if ($deletes){
        echo "deleted <br>";
    }
}


$html='HTML';
if(isset($_post['modify'])) {
    $query = "UPDATE fruits SET name = '$html' WHERE fruit.id = '$id' ";
    $modify =  mysqli_query($connect , $query);
    if ($modify){
        echo "modified <br>";
    }
}



//  $modify = " UPDATE fruits
//  SET price = 2, quantity = 2,
//  WHERE name = 'banana'"; 
?>