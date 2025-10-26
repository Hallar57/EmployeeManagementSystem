<?php
include '../../database/db.php';

$m_id = $_GET["m_id"];

$sql = "select * from manager where m_id='$m_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $phone = $_POST["phone"];

  $sql = "update manager set name='$name', dept_id='$dept_id', phone='$phone' where m_id ='$m_id'";

  if ($conn->query($sql) === TRUE) {
    header("Location: updatemanagers.php?m_id=$m_id");
  } else {
    echo $conn->error;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>manager Management</title>
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
      <li><a href="../home/departments.php">Departments</a></li>
      <li><a href="../home/managers.php" class="active">Managers</a></li>
      <li style="float:right">
        <form class="searchbar" action="../search/searchmanagers.php" method="GET">
          <input type="search" name="search" required placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </li>
    </ul>
  </div>

  <div class="insert">
    <form action="" method="POST">
      <input type="text" name="name" required value="<?php echo $row["name"]; ?>" maxlength="50">
      <input type="number" name="dept_id" required value="<?php echo $row["dept_id"] ?>" min="1">
      <input type="tel" name="phone" required value="<?php echo $row["phone"] ?>" pattern="[0-9]{11}">
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>

</html>