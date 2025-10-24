<?php
  include 'db.php';

  $sql = "select * from user;";
  $result = $conn->query($sql);

?>