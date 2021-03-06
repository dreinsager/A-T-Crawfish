<!DOCTYPE html>
<html>
<head>
    <?php require '../../DB/connect.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<?php include 'custheader.php'?><br>
<div class="container"><h1>About Us</h1><br></div>
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
    <img src="../img/trailer.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">What we do</h2>
            <p class="card-text">A&T Crawfish Company sells live and cooked crawfish as well as other products in multiple locations. Each week we go down to Louisiana to get the freshest seafood possible. We normally have crawfish ready to eat at around 11 in the morning until its dark that afternoon. Whether you need one pound or 100 pounds we have got you covered.
            Please view our menu for more options of what we offer! Feel free to call us for any estimates on parties, dinners, gatherings or any other events you may have planned.</p>
        </div>
    </div>&nbsp;&nbsp;&nbsp;
    <div class="card" style="width: 20rem; height: 50rem;">
    <img src="../img/cfish.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">Days Available</h2>
            <p class="card-text">We are availe every weekend rain or shine during the season to proved the best product available. We usually set up between 10AM and when the sun goes down.</p>
        </div>
    </div>&nbsp;&nbsp;&nbsp;
    <div class="card" style="width: 20rem; height: 50rem;">
    <img src="../img/cater.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">Catering</h2>
            <p class="card-text">We can cater any event!! Please feel free to contact us and ask us about how we can provide catering services.</p>
        </div>
    </div>&nbsp;&nbsp;&nbsp;

</div>
<style>
h1 {
    font-family: 'Abril Fatface', cursive;
    text-align: center;
}
</style>

<footer>
    <div class="">
        <nav class="nav justify-content-center navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="justify-content-center">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link" href="contact.php">Contact Us: (662)509-2088/(662)419-9075</a>
                    <img src="../img/cards.png" width="200" height="40" alt="cards">&nbsp;
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="location.php">Locations</a>
                    <a target="_blank" href="https://www.facebook.com/pages/category/Restaurant/AT-Crawfish-Company-276019415891067/"><img src="../img/fbk.png" width="37" height="40" class="fbk" alt="facebook"></a>&nbsp;
               </div>
            </div>
        </nav>
    </div>
</footer>
</body>
</html>