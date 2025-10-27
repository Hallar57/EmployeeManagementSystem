<!DOCTYPE html>
<html lang="en">
<!--hjhj-->
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/table.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="navbar">
    <a class="title" href="index.php">Employee Management System</a>
    <form class="searchbar" action="./database/login/login.php" method="POST">
      <input type="text" name="username" required placeholder="Username" maxlength="50">
      <input type="password" name="password" required placeholder="Password" minlength="8" maxlength="25">
      <button type="submit">Login</button>
    </form>
  </div>

  <div class="insert">
    <h1 id="signuptitle">Sign Up Here!</h1>
    <form action="./database/login/signup.php" method="POST">
      <input type="text" name="username" required placeholder="Username" maxlength="50">
      <input type="email" name="email" required placeholder="Email" maxlength="255">
      <input type="password" name="password" required placeholder="Password" minlength="8" maxlength="25">
      <button type="submit">Sign Up</button>
    </form>
  </div>

</body>

</html>
