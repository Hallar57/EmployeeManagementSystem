<?php
include '../../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $m_id = $_POST["m_id"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $sql = "insert into employee (name, dept_id, m_id, email, phone) values ('$name','$dept_id', '$m_id', '$email', '$phone');";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../../pages/home/employees.php");
  } else {
    echo $conn->error;
  }
}

?>