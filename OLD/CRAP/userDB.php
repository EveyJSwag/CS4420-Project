<?php 
session_start();
$Username = "";
$EMail = "";
$Password = "";
$DATABASE_HOST = 'localhost:8889';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'flatearth';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, 'flat_earth');

$logout = mysqli_real_escape_string($db, $_POST['logout']);
echo $logout;
#echo $_POST['logout'];
if (isset($_POST['reg_user'])){
    $Username = mysqli_real_escape_string($db, $_POST['username']);
    $Password = mysqli_real_escape_string($db, $_POST['password']);
    $CheckUsername = '';
    echo "wtf";
    $user_check_query = "SELECT * FROM users WHERE Username='$Username' AND `Password`='$Password' ";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if(!$user['Username'] || !$user['Password']) {
        echo "USER NAME OR PASSWORD DOESN'T EXIST";
    } else {
        $_SESSION['username'] = $Username;
        header('location: index_logged_in.php');
        exit();
    }
} else if(!empty($_POST['logout'])){
    session_unset();
    echo $_POST['exst_user'];
    echo '/n';
    echo $_POST['logout'];
    var_dump(isset($_POST['exst_user']));
    echo "test";
    header('location: index.php');
}


?>