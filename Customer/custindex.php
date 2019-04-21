<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to A&T Crawfish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'custheader.php'?><br><br>

<div class="row justify-content-center">

<?php 
$result = $mysqli->query("SELECT * FROM news") or die($mysqli->error);
?>

<div class="container">
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>News</th>
            </tr>
        </thead>
    <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['news']; ?></td>
        </tr>
<?php endwhile; ?>

<?php include 'custfooter.php'?>
</body>
</html>