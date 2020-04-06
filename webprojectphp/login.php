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
          <h2 class="gencssh">What's up!</h2>

          <form class="form" action="login.php" method="post">
            <div class="useremail">
              <label class="label">Username</label>
              <input type="text" class="user" name="username" value="">
            </div>
          <div class="password">
            <label class="label">Password</label>
            <input class="pass" type="password" name="password" value="">
          </div>

            <button type="submit" name="login_user" value="" class="btn"> Welcome! </button>
              <button type="submit" name="new" value="" class="btn"> New! </button>
            <?php include('errors.php') ?>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
