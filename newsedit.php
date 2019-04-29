<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php require '../DB/connect.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container"><h1>Edit News</h1><br></div>
<?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $result = $mysqli->query("SELECT * FROM news WHERE id='$id'");
        $row = $result->fetch_array();
    }
?>
<div class="container">
    <form action="adminindex.php" METHOD="POST">
            <div class="form-group">
                <label>Title:&nbsp;</label>
                <input type="text" class="form-control"  name="newtitle" value="<?php echo $row['title']; ?>" ><br><br>
                <input type="hidden" class="form-control"  name="id" value="<?php echo $row[0]; ?>" ><br><br>

                <label>Announcement:</label>
                <input type="text" class="form-control"  name="newnews" value="<?php echo $row['news']; ?>" ><br><br>

                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Update</button><br>
            </div>
    </form>
    <style>
h1 {
    font-family: 'Abril Fatface', cursive;
    text-align: center;
}
</style>

</body>
</html>