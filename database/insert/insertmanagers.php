<?php
include '../../database/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $phone = $_POST["phone"];

  $sql = "insert into manager (name, dept_id, phone) values ('$name','$dept_id', '$phone');";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../../pages/home/managers.php");
  } else {
    echo $conn->error;
  }
}

?>