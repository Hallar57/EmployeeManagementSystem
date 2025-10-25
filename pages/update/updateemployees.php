<?php
include '../../database/db.php';

$emp_id = $_GET["emp_id"];

$sql = "select * from employee where emp_id='$emp_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST["name"];
  $dept_id = $_POST["dept_id"];
  $m_id = $_POST["m_id"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $sql = "update employee set name='$name', dept_id='$dept_id', m_id='$m_id', email='$email', phone='$phone' where emp_id ='$emp_id'";

  if ($conn->query($sql) === TRUE) {
    //echo "<div style='text-align:center; margin-top:100px'>";
    //echo "Updated Successfully";
    //echo "<p><a href='index.php'>Go Back</a><p>";
    //echo "</div>";
    header("Location: updateemployees.php?emp_id=$emp_id");
  } else {
    echo $conn->error;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employee Management</title>
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
      <li><a href="../home/employees.php" class="active">Employees</a></li>
      <li><a href="../home/departments.php">Departments</a></li>
      <li><a href="../home/managers.php">Managers</a></li>
      <li style="float:right">
        <form class="searchbar" action="searchemployees.php" method="GET">
          <input type="text" name="search" required placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </li>
    </ul>
  </div>


  <div class="insert">
    <form action="" method="POST">
      <input type="text" name="name" required value="<?php echo $row["name"]; ?>">
      <input type="number" name="dept_id" required value="<?php echo $row["dept_id"] ?>">
      <input type="number" name="m_id" required value="<?php echo $row["m_id"] ?>">
      <input type="email" name="email" required value="<?php echo $row["email"] ?>">
      <input type="tel" name="phone" required value="<?php echo $row["phone"] ?>">
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>

</html>