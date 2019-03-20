<?php require '../DB/connect.php' 
?>
<?php


session_start();

    if (isset($_POST['enter'])){
        $title = $_POST['title'];
        $news = $_POST['news'];

        $_SESSION['message'] = "Information Successfully Added!";
        $_SESSION['msg_type'] = "success";

        $sql = "INSERT INTO news (title, news) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($mysqli);
        if(empty($title) || empty($news)) {
            echo 'Please enter all fields!';
            header("Location: adminindex.php?error=emptyfields");
            exit();
        }
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $title, $news);
            mysqli_stmt_execute($stmt);

            header("Location: adminindex.php");
            exit();
            }
           
            
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
}

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM news WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = "Information Successfully Deleted!";
        $_SESSION['msg_type'] = "danger";


        header("Location: adminindex.php");
        exit();

    }


