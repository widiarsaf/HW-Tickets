<?php
session_start();
    include "../connection.php";
    include "../assets/view.php";

    $idmovie = $_GET['id'];
    $query = "DELETE FROM movie WHERE idmovie= $idmovie";
    $result = mysqli_query($connect, $query);

    if($result){
            if($_SESSION['level'] == 1){
                header("location:movieAdmin.php");
           }
           else if($_SESSION['level'] == 2){
               header("location:movieUser.php");
           }
        
       
    } else {
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>