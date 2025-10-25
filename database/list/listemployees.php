<?php
include '../../database/db.php';

$sql = "select * from employee;";
$result = $conn->query($sql);
?>