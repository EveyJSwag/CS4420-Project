
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
<body>
    <form method="POST" action="login.php">
    
        <h1><p align="center"> JOIN OUR CUL- REVOLUTION! </p> </h1>

        <p align="center"> 
        
        User Name: <br> <input type="text" name="username" value="<?php echo $Username; ?>">
        <br> Password: <br> <input type="password" name="password" value="<?php echo $Password; ?>" >
        <br> E-Mail <br> <input type="email" name="email" value="<?php echo $EMail; ?>" >
        <br> Other True Facts: 
        <br> Lizard People <input type="checkbox" name="Lizard" value="Lizard">
        <br> Obama <input type="checkbox" name="Obama" value="Obama">
        <br> MK Ultra <input type="checkbox" name="MKUltra" value="MKUltra">
        <br> George Bush: FISH PEOPLE?!? <input type="checkbox" name="GBush" value="GBush">
        <br> <br> <input type="submit" class="btn btn-primary btn-lg" name="reg_user"> 
        <button type="submit" class="btn btn-primary btn-lg" formaction="index.php"> Become Back Home </button>
        
        </p>
    </form>
</body>
</head>
</html>
