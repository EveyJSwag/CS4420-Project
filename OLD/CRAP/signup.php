<?php 
session_start();
$Username = "";
$EMail = "";
$Password = "";
$Lizard = "";
$MObama = "";
$MKUltra = "";
$GBush = "";
$DATABASE_HOST = 'localhost:8889';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'flatearth';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, 'flat_earth');


if (isset($_POST['reg_user'])) {
    $Username = mysqli_real_escape_string($db, $_POST['username']);
    echo $Username;
    $checkUsrName = "SELECT * FROM users WHERE Username='$Username'";
    $checkUsrQuery = mysqli_query($db, $checkUsrName);
    $test = mysqli_fetch_assoc($checkUsrQuery);
    $EMail = mysqli_real_escape_string($db, $_POST['email']);
    $checkPassword;
    $Password = mysqli_real_escape_string($db, $_POST['password']);
    $Lizard = mysqli_real_escape_string($db, $_POST['Lizard']);;
    echo $Lizard;
    $MObama = mysqli_real_escape_string($db, $_POST['MObama']);;
    $MKUltra = mysqli_real_escape_string($db, $_POST['MKUltra']);;
    $GBush = mysqli_real_escape_string($db, $_POST['GBush']);;
    //print_r($_POST);
    //echo $_SESSION[0];
    if ($test['Username'] != $Username && $Username && $EMail && $Password) {
      $query = "INSERT INTO users (`Username`, `Password`, `E-Mail`, `Lizard`, `Michael Obama`, `MK Ultra`, `George Bush`) 
  			    VALUES('$Username', '$Password', '$EMail', '$Lizard', '$MObama', '$MKUltra', '$GBush')";
  	  mysqli_query($db, $query);
  	  $_SESSION['username'] = $Username;
      
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['theories'] = array('Lizard' => $Lizard, 'MObama' => $MObama, 'MKUltra' => $MKUltra, 'GBush' => $GBush);
      print_r($_SESSION['theories']);
      //header('location: index.php');
      header('location: index_logged_in.php');
      exit();
      
    } else {
      echo "This user name already exists or you didn't enter something";
    }
}
//exit;
?>