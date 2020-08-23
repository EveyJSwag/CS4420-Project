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
if (isset($_POST['reg_user'])){
    $Username = mysqli_real_escape_string($db, $_POST['username']);
    $Password = mysqli_real_escape_string($db, $_POST['password']);
    $CheckUsername = '';
    $user_check_query = "SELECT * FROM users WHERE Username='$Username' AND `Password`='$Password' ";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if(!$user['Username'] || !$user['Password']) {
        echo "USER NAME OR PASSWORD DOESN'T EXIST";
    } else {
        $_SESSION['username'] = $Username;
        $Lizard = $user['Lizard'];
        $_SESSION['theories'] = array('Lizard' => $Lizard);
        header('location: index.php');
        exit();
    }
}


?>
