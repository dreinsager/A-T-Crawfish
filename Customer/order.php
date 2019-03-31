<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'custheader.php'?><br><br><br>
<div class="row justify-content-center">

<form>
<div class="container">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</div><br>
<div class="container">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Email">
    </div>
  </div><br>
  <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button><br>

</div>
</form>
</div>
</body>
</html>