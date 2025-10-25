<?php
include '../database/db.php';

$id = $_GET["id"];

$sql = "select * from user where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $id = $_GET["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];

  $sql = "update user set name='$name', email='$email', age='$age' where id ='$id'";

  if ($conn->query($sql) === TRUE) {
    //echo "<div style='text-align:center; margin-top:100px'>";
    //echo "Updated Successfully";
    //echo "<p><a href='index.php'>Go Back</a><p>";
    //echo "</div>";
    header("Location: update.php?id=$id");
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
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/table.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="navbar">
    <a class="title" href="homepage.php">Employee Management System</a>
  </div>

  <div class="insert">
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
      <label for="age">Age:</label>
      <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>

</html>