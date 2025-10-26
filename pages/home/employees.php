<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employees</title>
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
        <form class="searchbar" action="../search/searchemployees.php" method="GET">
          <input type="search" name="search" required placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </li>
    </ul>
  </div>

  <div class="insert">
    <form action="../../database/insert/insertemployees.php" method="POST">
      <input type="text" name="name" required placeholder="Name" maxlength="50">
      <input type="number" name="dept_id" required placeholder="Department ID" min="1">
      <input type="number" name="m_id" required placeholder="Manager ID" min="1">
      <input type="email" name="email" required placeholder="Email" maxlength="255">
      <input type="tel" name="phone" required placeholder="Phone" pattern="[0-9]{11}">
      <button type="submit">Insert</button>
    </form>
  </div>
  <div>
    <form action="../../database/list/listemployees.php" method="GET">
      <?php
      include '../../database/list/listemployees.php';
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
          <th></th>
          <th></th>
          <th>ID</th>
          <th>Name</th>
          <th>Department ID</th>
          <th>Manager ID</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <td><a id='updatebutton' href=../update/updateemployees.php?emp_id=" . $row["emp_id"] . " >Update</a></td>
            <td><a id='deletebutton' href=../../database/delete/deleteemployees.php?emp_id=" . $row["emp_id"] . " >Delete</a></td>
            <td>" . $row["emp_id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["dept_id"] . "</td>
            <td>" . $row["m_id"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["phone"] . "</td>
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