<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
<head>
<h1> <p align="center">COLORADO SPRINGS: FLAT EARTH SOCIETY </p></h1>
<p align="center"><?php echo "Welcome: " . $_SESSION['username']; ?></p>
<p align="center"><img src="flatearth.jpg" style="height:400px;width:600px;"> </p>
<h2><p align="center">Become Woke</p></h2>
<br>
<h3> <p align="center"> OUR MISSION  </p></h3>
<br>
<p align="center"><b> is to enlighten and provide the wokest flat earth philosiphyes via the intelliigence and wide spread enlightentment of those individuals whom'st believe in the outdated philosiphys of the rounded earth teohry.  </b></p>

<body>


<form action="welcome.php" method="get">
<p align="center">
<button type="submit" formaction="login.php"> Become Signed Up </button>
<button type="submit" formaction="existinguser.php"> Become Logged In </button>
</p>
</form>

</body>
</head>

</html>
