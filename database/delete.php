<?php
include 'db.php';
$sql = "delete from user where id = " . $_GET["id"];

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
