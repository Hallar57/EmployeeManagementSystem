<?php
  include 'db.php';

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "insert into user (name, email, age) values ('$name', '$email', '$age');";

    if($conn->query($sql)===TRUE){
      echo "<div style='text-align:center; margin-top:100px'>";
      echo "Added Successfully";
      echo "<p><a href='index.php'>Go Back</a><p>";
      echo "</div>";
    } else {
      echo $conn->error;
    }
  }
?>