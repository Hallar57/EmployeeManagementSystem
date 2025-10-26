<?php
include '../../database/db.php';

$dept_id = $_GET["dept_id"];

$sql = "select * from department where dept_id='$dept_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST["name"];
  $building = $_POST["building"];

  $sql = "update department set name='$name', building='$building' where dept_id ='$dept_id'";

  if ($conn->query($sql) === TRUE) {
    header("Location: updatedepartments.php?dept_id=$dept_id");
  } else {
    echo $conn->error;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>department Management</title>
  <link rel="stylesheet" href="../../css/homepage.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="stylesheet" href="../../css/table.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="navbar">
    <ul>
      <li><a href="../home/employees.php">Employees</a></li>
      <li><a href="../home/departments.php" class="active">Departments</a></li>
      <li><a href="../home/managers.php">Managers</a></li>
      <li style="float:right">
        <form class="searchbar" action="searchdepartments.php" method="GET">
          <input type="search" name="search" required placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </li>
    </ul>
  </div>

  <div class="insert">
    <form action="" method="POST">
      <input type="text" name="name" required value="<?php echo $row["name"]; ?>" maxlength="50">
      <input type="text" name="building" required value="<?php echo $row["building"] ?>" maxlength="25">
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>

</html>