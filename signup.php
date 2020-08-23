<?php 
session_start();
$Username = "";
$EMail = "";
$Password = "";
$Lizard = "";


$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'group6';
$DATABASE_PASS = 'STUgroup6';
$DATABASE_NAME = 'group6';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (isset($_POST['reg_user'])) {
    $Username = mysqli_real_escape_string($db, $_POST['username']);
    #echo $Username;
    $checkUsrName = "SELECT * FROM users WHERE Username='$Username'";
    $checkUsrQuery = mysqli_query($db, $checkUsrName);
    $test = mysqli_fetch_assoc($checkUsrQuery);
    $EMail = mysqli_real_escape_string($db, $_POST['email']);
    $checkPassword;
    $Password = mysqli_real_escape_string($db, $_POST['password']);
    $Lizard = mysqli_real_escape_string($db, $_POST['Lizard']);;
    echo $Lizard;
    if ($test['Username'] != $Username && $Username && $EMail && $Password) {
      $query = "INSERT INTO users (`Username`, `Password`, `E-Mail`, `Lizard`) 
  			    VALUES('$Username', '$Password', '$EMail', '$Lizard')";
  	  mysqli_query($db, $query);
  	  $_SESSION['username'] = $Username;
      
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['theories'] = array('Lizard' => $Lizard);
      print_r($_SESSION['theories']);
      header('location: index.php');
      //header('login.php');
      exit();
      
    } else {
      echo "This user name already exists or you didn't enter something";
    }
}
//exit;
?>
