<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Departments</title>
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
        <form class="searchbar" action="../search/searchdepartments.php" method="GET">
          <input type="text" name="search" required placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </li>
    </ul>
  </div>

  <div class="insert">
    <form action="../../database/insert/insertdepartments.php" method="POST">
      <input type="text" name="name" required placeholder="Name">
      <input type="text" name="building" required placeholder="Building">
      <button type="submit">Insert</button>
    </form>
  </div>
  <div>
    <form action="../../database/list/listdepartments.php" method="GET">
      <?php
      include '../../database/list/listdepartments.php';
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
          <th></th>
          <th></th>
          <th>ID</th>
          <th>Name</th>
          <th>Building</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <td><a id='updatebutton' href=../update/updatedepartments.php?dept_id=" . $row["dept_id"] . " >Update</a></td>
            <td><a id='deletebutton' href=../../database/delete/deletedepartments.php?dept_id=" . $row["dept_id"] . " >Delete</a></td>
            <td>" . $row["dept_id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["building"] . "</td>
          </tr>";
        }
        echo "</table>";
      } else {
        echo "<h1 style='text-align: center;'>No Employees</h1>";
      }
      ?>
    </form>
  </div>
</body>

</html>