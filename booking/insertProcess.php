<?php
    include "../connection.php";
    include "../assets/view.php";
  
    $idbooking = rand(1,9999);
    $idmovie = $_POST['idmovie'];
    $iduser = $_POST['iduser'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $totalPrice = $price * $qty;
    
    

    $query = "INSERT INTO booking(idbooking,idmovie, iduser, date, qty, price, totalprice)
                VALUES ('$idbooking','$idmovie', '$iduser', '$date', '$qty', '$price', '$totalPrice')";

        if(mysqli_query($connect, $query)){
             if($_SESSION['level'] == 1){
                header("location:bookingPageAdmin.php");
           }
           else if($_SESSION['level'] == 2){
               header("location:../movie/movieUser.php");
           }
        }
        else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
            
        }

    mysqli_close($connect);

?>