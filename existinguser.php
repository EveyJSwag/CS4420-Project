<?php include('userDB.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<head>
    <h1><p align="center"> WELCOME BACK TO OUR SOCIETY OF WOKENESS </p></h1>
        <form method="POST" action="existinguser.php">
            <p align="center">
            User Name: <br> <input type="text" name="username" value="<?php echo $Username; ?>"> <br> 
            Password: <br> <input type="password" name="password" value="<?php echo $Password; ?>" > <br> 
            </p>
            <p align="center"><input type="submit" class="btn btn-primary btn-lg" name="reg_user"> 
            <button type="submit" class="btn btn-primary btn-lg" formaction="index.php"> Become Back Home </button> </p>
            
        </form>
</head>