<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "select username, password from login where username = '$username'";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();


  if ($row["username"] == $username && $row["password"] == $password) {
    header("Location: ../../pages/home/employees.php");
  } else {
    //echo $conn->error;
    echo "<script type='text/javascript'>alert('Invalid Username or Password');location='../../index.php';</script>";
  }
}
?>