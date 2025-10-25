<?php
include '../../database/db.php';

$sql = "delete from department where dept_id = " . $_GET["dept_id"];

if ($conn->query($sql) === TRUE) {
  header("Location: ../../pages/home/departments.php");
} else {
  echo $conn->error;
}
