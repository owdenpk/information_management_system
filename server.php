<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<?php
session_start();
//include ('connect.php');

// initializing variables
$username = "";
$email    = "";
$title    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $title = $_POST['title'];
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      //header("location:  register.php?remark_signup=failed");
      array_push($errors, header("location:  register.php?remark_signup=failed"));
    }
    if ($user['email'] === $email) {
       array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = sha1($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, phone, title, password) 
  			  VALUES('$username', '$email','$phone', '$title', '$password')";
  	mysqli_query($db, $query);
    //$_SESSION['echo $'] = $username;
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['title'] = $title;
    $_SESSION['phone'] = $phone;
    $_SESSION['password']=$password;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  else{
   
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = sha1($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: checkemail.php');
    }else {
    array_push($errors, header("location:  login.php?remark_login=failed"));

    }
  }
}

?>

