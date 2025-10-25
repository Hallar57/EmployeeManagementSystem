<?php
include '../../database/db.php';

$sql = "select * from department;";
$result = $conn->query($sql);
?>