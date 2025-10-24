<?php
  include 'db.php';
  $sql = "delete from user where id = ".$_GET["id"];

  if($conn->query($sql)===TRUE){
    echo "<div style='text-align:center; margin-top:200px'>";
    echo "Deleted Successfully";
    echo "<p><a href='index.php'>Go Back</a><p>";
    echo "</div>";
  } else {
    echo $conn->error;
  }
?>