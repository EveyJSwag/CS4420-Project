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

<form method="post" action="messageboard.php">
    <p align = "center">
        TOPIC: 
        <input type="text" name="subject"> <br>
        <input type="hidden" name="date" id="date"> <br>
        <textarea rows="5" cols="60" name="post"></textarea> <br>
        <button type="submit" class="btn btn-primary btn-lg" name="posted" value="posted"> POST </button> <br>
        <script>
            realDate = new Date();
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
            year = realDate.getFullYear();
            AMPM = "";
            monthNum = realDate.getMonth();
            month = months[monthNum];
            hour = realDate.getHours();
            if(hour < 12){
                AMPM="AM"
            } else {
                AMPM="PM"
            }
            if(hour == 0){
                hour=hour+12;
            } else if(hour > 12){
                hour=hour-12;
            }
            minute = realDate.getMinutes();
            day = realDate.getDate();
            dateForDB = month + " " + day + ", " + year + " at " + hour + ":" + minute + " " + AMPM;
            document.getElementById("date").value = dateForDB;
        </script>
    </p>
</form>
