<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $building = $_POST["building"];


  $sql = "insert into department (name, building) values ('$name','$building');";

  if ($conn->query($sql) === TRUE) {
    // echo "<div style='text-align:center; margin-top:100px'>";
    // echo "Added Successfully";
    // echo "<p><a href='index.php'>Go Back</a><p>";
    // echo "</div>";
    header("Location: ../pages/departments.php");
  } else {
    echo $conn->error;
  }
}

?>