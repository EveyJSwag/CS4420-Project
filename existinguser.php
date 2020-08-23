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
  <style>
    .input-group>.input-group-prepend {
      flex: 0 0 10%;
    }
    .input-group .input-group-text {
        width: 100%;
        font-size: 12px;
    }
    .betterFont {
      font-size: 40px;
    }
    .forgotFont{
      font-size: 12px;
    }
</style>
</head>

<head>
<div class="container">
    <div class="jumbotron">

        <h1 align="center"> <div class="betterFont">WELCOME BACK TO OUR SOCIETY</div></h1>
        <h2> <p align="center"></p> </h2>
        <h6 align="center"> </h6>
    </div>
        <form method="POST" action="existinguser.php">
        <div class="input-group">
          
          
              
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">USERNAME: </span>
                </div>
                <input type="text"  name="username" class="form-control" value="<?php echo $Username; ?>"> 
                
              </div>
              
              <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">PASSWORD: </span>
                </div>
                  <input type="password" name="password" class="form-control" value="<?php echo $Password; ?>" > 
                
              </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-lg" name="reg_user"> 
        <button type="submit" class="btn btn-primary btn-lg" formaction="index.php"> Become Back Home </button> 
        <br> <br> 
        <a href="forgot.php" class="forgotFont"> I FORGOT MY PASSWORD CUZ I'M STUPID </a> 
</form>
</div>
</head>
