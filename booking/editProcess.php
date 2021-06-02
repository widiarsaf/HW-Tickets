<?php
    include "../connection.php";
    include "../assets/view.php";

    $idbooking = $_GET['id'];
    $idmovie = $_POST['idmovie'];
    $iduser = $_POST['iduser'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $totalPrice = $price * $qty;

    $sql = "UPDATE booking SET 
        idmovie = '$idmovie', 
        iduser = '$iduser',
        date = '$date',
        price = '$price',
        qty = '$qty',
        totalprice = '$totalPrice'
        WHERE idbooking = '$idbooking'";
    
    
        if(mysqli_query($connect, $sql)){
             if($_SESSION['level'] == 1){
                header("location:bookingPageAdmin.php");
           }
           else if($_SESSION['level'] == 2){
               header("location:bookingPageUser.php");
           }
        }
        else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
            
        }

    mysqli_close($connect);

?>