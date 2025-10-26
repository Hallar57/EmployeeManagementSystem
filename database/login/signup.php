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
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "insert into login (username, email, password) values ('$username', '$email', '$password');";

  try {
    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Successful!');location='../../index.php';</script>";
    } else {
      //echo $conn->error;
      echo "<script type='text/javascript'>alert('Invalid Username or Password');location='../../index.php';</script>";
    }
  } catch (mysqli_sql_exception) {
    echo "<script type='text/javascript'>alert('Invalid Username or Password');location='../../index.php';</script>";
  }
}
?>