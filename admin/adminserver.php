<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'supershop_management_system');

// LOGIN USER
if (isset($_POST['login_admin'])) {
    $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($adminname)) {
        array_push($errors, "Admin name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM admins WHERE adminname='$adminname' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['adminname'] = $adminname;
          
          header('location: admin.php');
        }else {
            array_push($errors, "Wrong admin name/password combination");
        }
    }
  }
  
  ?>