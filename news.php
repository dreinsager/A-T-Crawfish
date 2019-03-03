<?php require '../DB/connect.php' ?>
<?php
    if (isset($_POST['enter'])){
        $title = $_POST['title'];
        $news = $_POST['news'];

        $mysqli->query("INSERT INTO news (title, news) VALUES ('$title', '$news')") or die($mysqli->error);
    }