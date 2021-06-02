<?php
session_start();
    include "../connection.php";
    $iduser = $_GET['id'];
    $query = "DELETE FROM user WHERE iduser = $iduser";
    $result = mysqli_query($connect, $query);

    if($result){
            header("location: userPage.php");
        
       
    } else {
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>