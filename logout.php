<?php 
session_start();
if(isset($_POST['logout'])){
    
    session_destroy();
    $_SESSION = array();
    header("Location: index.php");
    exit();
} else {
    //echo $_SESSION['username'];
}
?>