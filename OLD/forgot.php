<!DOCTYPE html>
<?php include('forgotServer.php')?>
<html lang="en">
<head>
  <title>FORGOT</title>
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
    .errorText{
      font-size: 16px;
      color: red;
    }
    .sucText{
      font-size: 16px;
      color: green;
    }
</style>
</head>
<head>
<div class="container">
    <div class="jumbotron">
        <h1 align="center"> <div class="betterFont"> STUPID MORON, FORGOT PASSWORD </div></h1>
        <h2> <p align="center"></p> </h2>
        <h6 align="center"> </h6>
    </div>

<form method="POST" action="forgot.php">
      
        <h1><p align="center"> WRITE IT DOWN, DUMMY! </p> </h1>

        <div class="input-group">
          <div class="input-group" >
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">USERNAME: </span>
            </div>
            <input type="text" name="usernameForget" class="form-control"value="<?php echo $UsernameForget; ?>">
          </div>
          
          
          <div class="input-group" >
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">E-MAIL: </span>
            </div>
            <input type="email" name="emailForget" class="form-control" value="<?php echo $EMailForget; ?>" >
          </div>

        </div>
        <br>
            
            <?php if(!isset($_POST["sendEmail"]) || $willSend==FALSE) : ?>
                <button type="submit" class="btn btn-primary btn-lg" name="sendEmail" value="sendEmail"> SEND EMAIL! </button>
            <?php elseif($willSend==TRUE) : ?>
               <p class="sucText"> E-MAIL SENT! </p> <br>
               <button type="submit" class="btn btn-primary btn-lg"  formaction="index.php" name="yeet" value="yeet"> Become Back Home </button>
            <?php endif ?>
        </div>
</form>
</head>