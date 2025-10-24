<?php
  include 'db.php';

  $id = $_GET["id"];

  $sql="select * from user where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if(isset($_POST['update'])){
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "update user set name='$name', email='$email', age='$age' where id ='$id'";

    if($conn->query($sql)===TRUE){
      echo "<div style='text-align:center; margin-top:100px'>";
      echo "Updated Successfully";
      echo "<p><a href='index.php'>Go Back</a><p>";
      echo "</div>";
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
  <link rel="stylesheet" href="style.css?v=1.0">

</head>
<body>
  <div id="insert">
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" value ="<?php echo $row['name']; ?>" required>
      <label for="email">Email:</label>
      <input type="email" name="email" value ="<?php echo $row['email']; ?>" required>
      <label for="age">Age:</label>
      <input type="number" name="age" value ="<?php echo $row['age']; ?>" required>
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>
</html>