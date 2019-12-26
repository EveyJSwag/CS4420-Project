<?php 
session_start();
$Username = "";
$EMail = "";
$Password = "";
$Lizard = "";
$Obama = "";
$MKUltra = "";
$GBush = "";
$DATABASE_HOST = 'localhost:8889';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'flatearth';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, 'flat_earth');
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
        $Obama = $user['Obama'];
        $MKUltra = $user['MK Ultra'];
        $GBush = $user['George Bush'];
        $_SESSION['theories'] = array('Lizard' => $Lizard, 'Obama' => $Obama, 'MKUltra' => $MKUltra, 'GBush' => $GBush);
        header('location: index.php');
        exit();
    }
}


?>