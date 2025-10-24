<?php
  include 'db.php';

  $search = $_GET["search"];
  //print($search);

  
  $sql = "select * from user where concat(id, name, email, age) like '%$search%'";

  $result = $conn->query($sql);


  //echo "<p><a href='index.php'>Go Back</a><p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Management</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div id="searchbar">
    <form action="search.php" method="GET">
      <input type="text" name="search" required>
      <button type="submit">Search</button>
    </form>
  </div>

  <div>
    <form>
      <?php
      if($result->num_rows>0){
        echo "<table>";
        echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th></th>
        <th></th>
        </tr>";
        
        while($row = $result->fetch_assoc()){
          echo "<tr>
          <td>".$row["id"] ."</td>
          <td>".$row["name"] ."</td>
          <td>".$row["email"] ."</td>
          <td>".$row["age"] ."</td>
          <td><a href=update.php?id=".$row["id"]." >Update</a></td>
          <td><a href=delete.php?id=".$row["id"]." >Delete</a></td>
          </tr>";
        }
        echo "</table>";
      }
      ?>
    </form>
  </div>
</body>
</html>