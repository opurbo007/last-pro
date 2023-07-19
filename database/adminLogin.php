<?php

include("../database/config.php");
session_start();
$email = "";
$password = "";
$errors = array(); 



if (isset($_POST['admin_login'])) {
  $email = mysqli_real_escape_string($db, $_POST['admin_email']);
  $password = mysqli_real_escape_string($db, $_POST['admin_password']);

// for adminemail validation
  if (empty($email)) {
  	array_push($errors, "! Username cann't be empty");
  }
  // for password validation
  if (empty($password)) {
  	array_push($errors, " ! Password cann't be empty");
  }
// if everything okey then
  if (count($errors) == 0) {
  	$query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
   
    if (mysqli_num_rows($results)==1)
    {
  	  $_SESSION['admin_email'] = $email;
  	  // $_SESSION['success'] = "You can logged in";
  	  header('location: ../admin/dashboard.php');
  	}else {
  		array_push($errors, "Username or password you enter is wrong!");
  	}
  }
}

?>