<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employee Management</title>
  <link rel="stylesheet" href="./css/homepage.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/table.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="navbar">
    <a class="title" href="index.php">Employee Management System</a>
    <form class="searchbar" action="search.php" method="GET">
      <input type="text" name="search" required placeholder="Username">
      <input type="password" name="search" required placeholder="Password">
      <button type="submit">Login</button>
    </form>
  </div>

  <div class="insert">
    <form action="../database/insert.php" method="POST">
      <!--<label for="name">Name:</label>-->
      <input type="text" name="name" required placeholder="Username">
      <!--<label for="email">Email:</label>-->
      <input type="email" name="email" required placeholder="Email">
      <!--<label for="age">Age:</label>-->
      <input type="password" name="age" required placeholder="Password">
      <button type="submit">Sign Up</button>
    </form>
  </div>

</body>

</html>