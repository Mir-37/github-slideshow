<?php
session_start();
//initialize flag variables
$username = "";
$email = "";
$errors = array();
//database connection
  $db = mysqli_connect('localhost','root','','ureg');

  if (isset($_POST['button'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($username)) {
      array_push($errors, "Error !! Invalid user name");
    }
    if(empty($email)){
      array_push($errors, "Error !! Invalid email address");
    }

    if ($password_1 != $password_2 || empty($password_1&$password_2)) {
      array_push($errors, "Error !! Check the password again");
    }

    //check for existing email and password

    //select user and email from db

    $user_check = "SELECT * FROM reg WHERE username='$username' AND email='$email' LIMIT 1 ";
    $query = mysqli_query($db, $user_check);
    $user = mysqli_fetch_assoc($query);

    if ($user) { //if only user exists then again a logic
       if($user['username'] === $username ){
         array_push($errors, "User already exists");
       }
       if($user['email'] === $email){
         array_push($errors, "Email is already registered");
       }
    }

    //Count errors and insert into db

    if (count($errors) == 0) {
      $password = md5($password_1);
      $insert = "INSERT INTO reg (username, email, password)
                  VALUES('$username', '$email', '$password')";
      $insert_query = mysqli_query($db, $insert);

      $_SESSION['username'] = $username;
      header('location:index.php');

    }

  }
  //for log in btn

  // for log in
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Error !! Invalid user name");
    }
    if (empty($password)) {
      array_push($errors, "Error !! Re write the password" );
    }

    if (count($errors) == 0) {
      $password = md5($password);

      $matchdb = "SELECT * FROM reg WHERE username = '$username' AND password = '$password'";
      $result  = mysqli_query($db,$matchdb);
      if (mysqli_num_rows($result) == 1) {

        $_SESSION['username'] = $username;
        header('location:index.php');
        
      }
      else{
        array_push($errors, "Invalid username or password! ");
      }
    }
  }

  if(isset($_POST['new'])){
    header('location:registration.php');
  }
  if(isset($_POST['log'])){
    header('location:login.php');
  }

?>
