<?php
session_start();

// initializing variables
$username = "";
$firstname = "";
$secondname    = "";
$gender    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'givans');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $secondname = mysqli_real_escape_string($db, $_POST['secondname']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $sports = mysqli_real_escape_string($db, $_POST['sports']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "Username is required"); }
  if (empty($secondname)) { array_push($errors, "Email is required"); }
  if (empty($dob)) { array_push($errors, "DOB is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, firstname, secondname,  password, gender, dob, sport) 
  			  VALUES('$username', '$firstname', '$secondname', '$password', '$gender', '$dob', '$sports')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
    //   echo("Inserted");
  }
}