<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "market";

     $name=$_POST['name'];
     $picture=$_POST['picture'];
     $price=$_POST['price'];
 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

 

  if(isset($_POST['add'])) {

  $sql = "INSERT INTO market ( name, picture,price)
VALUES ('$name','$picture','$price')";

if ($conn->query($sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
  if(isset($_POST['view'])) {

    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>name</th><th>picture</th><th>price</th></tr>";
    
    class TableRows extends RecursiveIteratorIterator {
      function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
      }
    
      function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
      }
    
      function beginChildren() {
        echo "<tr>";
      }
    
      function endChildren() {
        echo "</tr>" . "\n";
      }
    }
    
    $stmt = $conn->prepare("SELECT name,picture,price FROM market");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }
  echo "</table>";

  }
  
 ?>