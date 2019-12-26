<?php
session_start();
$DATABASE_HOST = 'localhost:8889';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'flat_earth';
$author = '';
$date = '';
$subject ='';
$content='';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if(isset($_POST['posted']) && $_SESSION['username']){
    $author = mysqli_real_escape_string($db, $_SESSION['username']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $content = mysqli_real_escape_string($db, $_POST['post']);
    $messageBoardQuery = "INSERT INTO messageBoard (`author`, `date`, `subject`, `content`) 
    VALUES ('$author', '$date', '$subject', '$content')";
    mysqli_query($db, $messageBoardQuery);
    header("Location:messageboard.php");



    
} 
?>