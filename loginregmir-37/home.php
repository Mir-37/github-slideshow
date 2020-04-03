<?php
 session_start();
 if (!isset( $_SESSION['username'])) {
   header('location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>
  </head>
  <body>
    <p>Welcome <?php echo $_SESSION['username'];?></p>

    <a href="logout.php">Want to logout? Will miss you.</a>
  </body>
</html>
