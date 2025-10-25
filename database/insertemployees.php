<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $m_id = $_POST["m_id"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $sql = "insert into employee (name, dept_id, m_id, email, phone) values ('$name','$dept_id', '$m_id', '$email', '$phone');";

  if ($conn->query($sql) === TRUE) {
    // echo "<div style='text-align:center; margin-top:100px'>";
    // echo "Added Successfully";
    // echo "<p><a href='index.php'>Go Back</a><p>";
    // echo "</div>";
    header("Location: ../pages/homepage.php");
  } else {
    echo $conn->error;
  }
}

?>