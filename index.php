<?php include('logout.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>



<head>
  <title>HOME PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body {
    padding-top: 60px;
}
</style>
<style>
    .text{
        color: black;
        font-size: 12px;
        align: center;
    }
</style>
<style>
    .getLeft{
        margin-left: 6px;
        width: 100%;
    }
</style>
<style>
    .headerText{
        color: gray;
        font-size 20px;
    }
</style>



<nav class="navbar fixed-top navbar-light bg-dark">
<div class="getLeft">
   <form align="left" method="POST" action="index.php" >
   
        <?php if(!$_SESSION['username']) : ?>
            
            <button type="submit" class="btn btn-primary btn-lg" formaction="login.php"> Become Signed Up </button>
    
            <button type="submit" class="btn btn-success btn-lg" formaction="existinguser.php"> Become Logged In </button>
            
        <?php else : ?>
        
            <button type="submit" class="btn btn-primary btn-lg" name="logout" value="logout"> Become Logged Out :( </button>
            
            <button type="submit" class="btn btn-success btn-lg" formaction="messageboard.php"> Become Discussed </button>
        
        <?php endif; ?>
    
    </form>
    
    </div>
</nav>


<div class="container">
    <div class="jumbotron">
        <h1 align="center"> FLAT EARTH SOCIETY </h1>
        <h2> <p align="center">of Colorado Springs </p> </h2>
        <h6 align="center"> WOKENING PEOPLE SINCE 2019 </h6>
    </div>
</div>

<br>
<?php if($_SESSION['username']) : ?>
    <h5 align="center"><em><?php echo "Welcome: " . $_SESSION['username']; ?></em> </h5> 
    <?php if($_SESSION['theories']) : ?>
    <h5 align="center"><em> 
        <?php $counter = 0 ?>
        <?php foreach($_SESSION['theories'] as $test) : ?>
            <?php if($test) : ?>    
                <?php echo $test ?>
                <?php if ($counter < 2) {echo ", ";} ?>
                
            <?php endif ?>
            <?php $counter=$counter+1 ?>
        <?php endforeach; ?>
    </em> </h5>
    <?php endif ?>
<?php endif; ?>
<p align="center"><img src="flatearth2.jpg" class="img-circle" style="height:400px;width:650px;"> </p>
<h2><p class="lead" align="center">Become Woke</p></h2>
<h6 class="text-danger" align="center"> <strong>DISCLAIMER:</strong> The individual pictured above is, despite our best efforts, in no way, shape or form affliated with the flath earth society of colorado springs </h3> 
<br>
<div class="container">  
        <div class="media">
        <img class="align-self-start mr-3 img-circle"  src="founder.JPG" alt="FOUNDER" style="height:64px;width:64px;">
        <div class="media-body">
            
            <h5 class="mt-0">OUR MISSION</h5>
            <p> <div class="text">...is to enlighten and provide the wokest flat earth philosiphyes via the intelliigence and wide spread enlightentment of those individuals whom'st believe in the outdated philosiphys of the rounded earth teohry. </div> </p>
        
        </div>
        </div>
</div>

<body>



</body>
</div>
</head>

</html>
