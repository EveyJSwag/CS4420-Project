<?php 
require_once "/home/group6/public_html/vendor/autoload.php";
require ("/home/group6/public_html/vendor/phpmailer/phpmailer/src/PHPMailer.php");
require ("/home/group6/public_html/vendor/phpmailer/phpmailer/src/SMTP.php");

session_start();
$UsernameForget = "";
$EMailForget = "";
$willSend = FALSE;
$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'group6';
$DATABASE_PASS = 'STUgroup6';
$DATABASE_NAME = 'group6';
$db = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if(isset($_POST["sendEmail"])){
    $UsernameForget = mysqli_real_escape_string($db, $_POST['usernameForget']);
    
    
    $EMailForget = mysqli_real_escape_string($db, $_POST['emailForget']);
    
    $checkUserStrings = "SELECT * FROM users WHERE Username='$UsernameForget'";
    $userStrings = mysqli_query($db, $checkUserStrings);
    $userNameEmail = mysqli_fetch_assoc($userStrings);
    if($userNameEmail) {    

        $checkEmail = $userNameEmail['E-Mail'];
        
        
            if ($checkEmail == $EMailForget) {

                $recPassword = $userNameEmail['Password'];
                
                
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->IsSMTP();  
                $mail->Host = 'smtp.gmail.com'; 
                $mail->Port = 465;            
                $mail->SMTPAuth = true;  
                //$mail->SMTPDebug = 4;
                $mail->Username = '######@gmail.com';                
                $mail->Password = '######'; 
                $mail->SMTPSecure = 'ssl'; 
                $mail->From = '######@gmail.com';
                $mail->FromName = 'Flatty Boy';
                $mail->AddAddress($EMailForget);
                $mail->IsHTML(true); 
                $mail->Subject = 'Password for ' . $UsernameForget;
                $mail->Body    = 'Here is your password, dummy: <strong>' . $recPassword . '<strong>';
                $mail->AltBody = 'Here is your password, dummy: <strong>' . $recPassword;
                if(!$mail->Send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                    exit;
                } 
                
                $willSend = TRUE;
            } else {
                echo '<div class="container errorText"> We do not recognize this email </div>';
            }
        } else {
            echo '<div class="container errorText">Your Username is not right or you did not enter something </div>';
        }

}


?>
