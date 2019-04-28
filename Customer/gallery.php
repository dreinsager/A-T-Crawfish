<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php include 'custheader.php'?><br><br>
<div class="container"><h1>Gallery Slideshow</h1><br></div>
  <div class="row justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 40rem; height: 40rem">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img7.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/img8.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<?php include 'custfooter.php'?>
<style>
h1 {
    font-family: 'Abril Fatface', cursive;
    text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>