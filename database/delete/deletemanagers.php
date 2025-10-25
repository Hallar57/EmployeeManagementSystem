<?php
include '../../database/db.php';

$sql = "delete from manager where m_id = " . $_GET["m_id"];

if ($conn->query($sql) === TRUE) {

  header("Location: ../../pages/home/managers.php");
} else {
  echo $conn->error;
}
