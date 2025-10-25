<?php
include 'db.php';
$sql = "delete from employee where emp_id = " . $_GET["emp_id"];

if ($conn->query($sql) === TRUE) {
  //echo "<script type='text/javascript'>setTimeout(function(){location.reload();}, 5000);</script>";
  //echo "<script>setTimeout(function(){location.reload();},0);</script>";
  //echo "<div style='text-align:center; margin-top:200px'>";
  //echo "Deleted Successfully";
  //echo "<p><a href='index.php'>Go Back</a><p>";
  //echo "</div>";
  header("Location: ../pages/homepage.php");
} else {
  echo $conn->error;
}
