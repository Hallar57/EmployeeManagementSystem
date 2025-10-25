<?php
include '../../database/db.php';

$sql = "delete from employee where emp_id = " . $_GET["emp_id"];

if ($conn->query($sql) === TRUE) {
  header("Location: ../../pages/employees.php");
} else {
  echo $conn->error;
}
