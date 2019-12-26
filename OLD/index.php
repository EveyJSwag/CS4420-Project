<?php include('logout.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>



<head>
  <title>HOME PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

</head>
<style>
body {
    padding-top: 60px;
}
</style>
<style>
    .text{
        color: gray;
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
        color: white;
        font-size: 16px;
        padding-top: 10px;
        
    }
</style>
<style>
    .customWidth {
        width: 150px !important;
    }
    .somePadding{
        padding: 5px;
    }
    .someRightPadding{
        padding-right:10px
    }
</style>




<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark" >    

            <form  method="POST" action="index.php" >
            <div class="headerText"> 
                <button class="btn btn-lg btn-primary"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> 
                    <span class="navbar-toggler-icon"> </span>
                </button>  
                BECOME WAKED 
            </p> 

            <div class="collapse" id="collapseExample">
                
                    <?php if(!$_SESSION['username']) : ?>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg customWidth" formaction="login.php"> Become Signed Up </button>
                        <div class="somePadding"> </div>
                                
                        <button type="submit" class="btn btn-success btn-lg customWidth" formaction="existinguser.php"> Become Logged In</button>
                                
                    <?php else : ?>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg customWidth" name="logout" value="logout"> Become Logged Out :( </button>
                        <div class="somePadding"> </div>
                                
                    <button type="submit" class="btn btn-success btn-lg customWidth" formaction="messageboard.php"> Become Discussed </button>
                            
                    <?php endif; ?>
                    
            </div>
      
        </form>  
        
</nav>
<div class="somePadding"> </div>

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
        <?php $cArray = array() ?>
        <?php foreach($_SESSION['theories'] as $test) : ?>
            <?php if($test) : ?>    
                <?php $cArray[$counter]= $test?>
                <?php $counter=$counter+1 ?>
            <?php endif ?>
        <?php endforeach; ?>
        <?php 
            $counter = 0;
            foreach($cArray as $interest) {
                echo $interest;
                if(($counter+1) < count($cArray)){
                    echo ", ";
                }
                $counter = $counter +1;
            }
        ?>
    </em> </h5>
    <?php endif ?>
<?php endif; ?>
<p align="center"><img src="flatearth2.jpg" class="img-circle" style="height:400px;width:650px;"> </p>
<h2><p class="lead" align="center">Become Woke</p></h2>
<h6 class="text-danger" align="center"> <strong>DISCLAIMER:</strong> The individual pictured above is, despite our best efforts, in no way, shape or form affliated with the flat earth society of colorado springs </h3> 
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
