<?php
include '../database/db.php';

$search = $_GET["search"];
//print($search);

$sql = "select * from manager where concat(m_id, name) like '%$search%'";

$result = $conn->query($sql);

//echo "<p><a href='index.php'>Go Back</a><p>";
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
    <div class="searchbar">
      <form action="searchmanagers.php" method="GET">
        <input type="text" name="search" required>
        <button type="submit">Search</button>
      </form>
    </div>
  </div>

  <div>
    <form action="searchmanagers.php" method="GET">
      <?php
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
          <th></th>
          <th></th>
          <th>ID</th>
          <th>Department ID</th>
          <th>Name</th>
          <th>Phone</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <td><a id='updatebutton' href=update.php?dept_id=" . $row["dept_id"] . " >Update</a></td>
            <td><a id='deletebutton' href=../database/delete.php?dept_id=" . $row["dept_id"] . " >Delete</a></td>
            <td>" . $row["m_id"] . "</td>
            <td>" . $row["dept_id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["phone"] . "</td>
          </tr>";
        }
        echo "</table>";
      } else {
        echo "<h1 style='text-align: center;'>No managers Found</h1>";
      }
      ?>
    </form>
  </div>
</body>

</html>