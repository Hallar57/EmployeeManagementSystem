<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $phone = $_POST["phone"];

  $sql = "insert into manager (name, dept_id, phone) values ('$name','$dept_id', '$phone');";

  if ($conn->query($sql) === TRUE) {
    // echo "<div style='text-align:center; margin-top:100px'>";
    // echo "Added Successfully";
    // echo "<p><a href='index.php'>Go Back</a><p>";
    // echo "</div>";
    header("Location: ../pages/managers.php");
  } else {
    echo $conn->error;
  }
}

?>