
<?php include('signup.php')?>

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
<body>
    <form method="POST" action="login.php">
    
        <h1><p align="center"> JOIN OUR CUL- REVOLUTION! </p> </h1>

        <p align="center"> 
        
        User Name: <br> <input type="text" name="username" value="<?php echo $Username; ?>">
        <br> Password: <br> <input type="password" name="password" value="<?php echo $Password; ?>" >
        <br> E-Mail <br> <input type="email" name="email" value="<?php echo $EMail; ?>" >
        <br> Other True Facts: 
        <br> Lizard People <input type="checkbox" name="Lizard" value="Lizard">
        <br> Michael Obama <input type="checkbox" name="MObama" value="MObama">
        <br> MK Ultra <input type="checkbox" name="MKUltra" value="MKUltra">
        <br> George Bush 7/11 <input type="checkbox" name="GBush" value="GBush">
        <br> <br> <input type="submit" name="reg_user"> 
        <button type="submit" formaction="index.php"> Become Back Home </button>
        
        </p>
    </form>
</body>
</head>
</html>
