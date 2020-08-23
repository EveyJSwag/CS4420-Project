
<?php include('signup.php')?>

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
<style>
  .input-group>.input-group-prepend {
    flex: 0 0 10%;
}
.input-group .input-group-text {
    width: 100%;
    font-size: 12px;
}
.betterFont {
  font-size: 14px;
}
</style>

<body>
<div class="container">
    <div class="jumbotron">
        <h1 align="center"> BECOME SIGNED UP </h1>
        <h2> <p align="center"></p> </h2>
        <h6 align="center"> </h6>
    </div>

    
    <form method="POST" action="login.php">
      
        <h1><p align="center"> JOIN OUR REVOLUTION! </p> </h1>

        <div class="input-group">
          <div class="input-group" >
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">USERNAME: </span>
            </div>
            <input type="text" name="username" class="form-control"value="<?php echo $Username; ?>">
          </div>
          
          <div class="input-group" >
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">PASSWORD: </span>
            </div>
            <input type="password" name="password" class="form-control" value="<?php echo $Password; ?>" >
          </div>
          
          <div class="input-group" >
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">E-MAIL: </span>
            </div>
            <input type="email" name="email" class="form-control" value="<?php echo $EMail; ?>" >
          </div>

        </div>
        <div class="betterFont">
          <br> Other True Facts: 
          <br> Lizard People <input type="checkbox" name="Lizard" value="Lizard">
          <br> <br> <input type="submit" class="btn btn-primary btn-lg" name="reg_user"> 
          <button type="submit" class="btn btn-primary btn-lg" formaction="index.php"> Become Back Home </button>
        </div>
        
        
    </form>
    </div>
</body>
</head>
</html>
