<?php

  session_unset();
  session_start();
  if (!isset($_SESSION['username'] )){
    header("location:login.php");
  }

  if(isset($_GET['logout'])){
    session_destroy();
    session_unset($_SESSION['username']);
    header("location:login.php");
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User login and registration</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
            <div class="header">
              <h2 class="gencssh2">Welcome to HeLL37's world</h2>

              <p class="gencssp1">Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <button class="btnp" type="submit" name="button"><a href="index.php?logout='1'">LogOut !!</a></button>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
