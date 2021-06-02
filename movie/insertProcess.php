<?php
    include "../connection.php";
    include "../assets/view.php";

    $idmovie = $_POST['idmovie'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $cover = $_FILES['cover']['name'];
    $cover_tmp = $_FILES['cover']['tmp_name'];

    $angka_acak     = rand(1,999);
    $cover_baru = $angka_acak.'-'.$cover;
    

    if(move_uploaded_file($cover_tmp, 'uploads/'. $cover_baru)){
        $sql = "INSERT into movie (idmovie, title, year, genre, price, cover)
                VALUES ('$idmovie', '$title','$year','$genre','$price', '$cover_baru')";
        if(mysqli_query($connect, $sql)){
           if($_SESSION['level'] == 1){
                header("location:movieAdmin.php");
           }
        } else {
            echo "Record is failed to add <br>" . mysqli_error($connect);
        }
    } else{
        echo "There is an error while uploading the file";
    }

    mysqli_close($connect);

?>