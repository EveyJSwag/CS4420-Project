<?php include('messageDB.php')?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MESSAGE BOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
<head>

<div class="container">
    <div class="jumbotron">
        <h1 align="center"> BECOME DISCUSSED </h1>
        <h2> <p align="center"> The Woke Board of Messaging </p> </h2>
    </div>
</div>
<style>
.flex-container{
    display: flex;
    justify-content: space-between;
}


</style>


<?php 
    $postQuery = "SELECT * FROM messageBoard";
    $results = mysqli_query($db, $postQuery);
?>
<table class="table table-dark">
    
        <thead>
            <tr>
                <th scope="col"> AUTHOR: </th>
                <th scope="col"> SUBJECT: </th>
                <th scope="col"> DATE: </th>
                <th scope="col"> CONTENT: </th>               
            </tr>   
            <tbody>
                
                <?php while($row_fields = mysqli_fetch_array($results)) : ?>
                    <tr>
                    <th scope="row"> <?php echo $row_fields['author'] ?> </th>
                    <td> <?php echo $row_fields['subject'] ?> </td>
                    <td> <?php echo $row_fields['date'] ?> </td>
                    <td> <?php echo $row_fields['content'] ?> </td>
                    </tr>
                <?php endwhile; ?>
                
            </tbody> 
</table>
<form method="POST" action="messageboard.php">
    <div class="flex-container">
        <button type="submit" class="btn btn-primary btn-lg" formaction="index.php"> Become Back Home </button>
        <button type="submit" class="btn btn-primary btn-lg" formaction="newPost.php"> NEW POST+ </button>
    </div>
</form>
</html>

