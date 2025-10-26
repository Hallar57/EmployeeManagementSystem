<?php
include '../../database/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $building = $_POST["building"];


  $sql = "insert into department (name, building) values ('$name','$building');";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../../pages/home/departments.php");
  } else {
    echo $conn->error;
  }
}
?>