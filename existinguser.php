<?php include('userDB.php')?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<head>
    <h1><p align="center"> WELCOME BACK TO OUR SOCIETY OF WOKENESS </p></h1>
        <form method="POST" action="existinguser.php">
            <p align="center">
            User Name: <br> <input type="text" name="username" value="<?php echo $Username; ?>"> <br> 
            Password: <br> <input type="password" name="password" value="<?php echo $Password; ?>" > <br> 
            </p>
            <p align="center"><input type="submit" name="reg_user"> 
            <button type="submit" formaction="index.php"> Become Back Home </button> </p>
            
        </form>
</head>