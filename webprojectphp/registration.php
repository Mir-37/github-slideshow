<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration form</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="containerform">
      <div class="rowform">
        <div class="colform">
          <h2 class="gencssh">New here? Join us!</h2>

          <form class="form" action="registration.php" method="post">
            <div class="useremail">
              <label class="label">Username</label>
              <input type="text" name="username" value="">
              <label class="label">Email</label>
              <input type="text" name="email" value="">
            </div>
          <div class="password">
            <label class="label">Password</label>
            <input type="password" name="password_1" value="">
            <label class="label">Confirm Password</label>
            <input type="password" name="password_2" value="">
          </div>

            <button type="submit" name="button" value="" class="btn"> Join! </button>
              <button type="submit" name="log" value="" class="btn"> Log in! </button>
            <?php include('errors.php') ?>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
