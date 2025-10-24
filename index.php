<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employee Management</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="navbar">
    <a class="title" href="index.php">Employee Management System</a>
    <form class="searchbar" action="search.php" method="GET">
      <input type="text" name="search" required placeholder="Search...">
      <button type="submit">Search</button>
    </form>
  </div>

  <div class="insert">
    <form action="insert.php" method="POST">
      <!--<label for="name">Name:</label>-->
      <input type="text" name="name" required placeholder="Name">
      <!--<label for="email">Email:</label>-->
      <input type="email" name="email" required placeholder="Email">
      <!--<label for="age">Age:</label>-->
      <input type="number" name="age" required placeholder="Age">
      <button type="submit">Insert</button>
    </form>
  </div>
  <div>
    <form action="list.php" method="GET">
      <?php
      include 'list.php';
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
          <th></th>
          <th></th>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <td><a id='updatebutton' href=update.php?id=" . $row["id"] . " >Update</a></td>
            <td><a id='deletebutton' href=delete.php?id=" . $row["id"] . " >Delete</a></td>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["age"] . "</td>
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