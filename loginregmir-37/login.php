<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login and register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Log in here</h2>
          <form class="" action="validate.php" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="user" value="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" value="">
            </div>
            <button type="submit" name="btn btn_primary">Login</button>
          </form>
        </div>
      </div>


      <div class="col-md-6">
        <h2>Register here</h2>
        <form class="" action="registration.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" value="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="">
          </div>
          <button type="submit" name="btn btn_primary">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
