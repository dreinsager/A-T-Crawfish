<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php require '../DB/connect.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'adminheader.php'?>
<?php require '../DB/connect.php' ?>







<form action="news.php" METHOD="POST">
    <div class="from-group">
        <label>Title:</label>
        <input type="text" class="from-control"  name="title" ><br><br>
    </div>
    <div class="form-group">
        <label>Enter Announcement:</label>
        <textarea class="form-control" rows="3" name="news"></textarea>
    </div>
    <div class="from-group">
    <button type="submit" name="enter" class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>
</form>

















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>