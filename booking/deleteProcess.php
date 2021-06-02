<?php
    include "../connection.php";
    include "../assets/view.php";
    $idbooking = $_GET['id'];
    $select = "SELECT * FROM booking WHERE idbooking= '$idbooking'";
    $sql = mysqli_query($connect, $select);
    $check = mysqli_num_rows($sql);

    if($check > 0){
            $userdata = mysqli_fetch_assoc($sql);
            $idmovie = $userdata['idmovie'];
            $iduser = $userdata['iduser'];
            $totalPrice = $userdata['totalprice'];
            $date = date("Y-m-d");
            $query = "INSERT INTO confirmed (idbooking,idmovie, iduser,totalprice, date_confirmed)
                VALUES ('$idbooking', '$idmovie','$iduser','$totalPrice', '$date')";
            $result =   mysqli_query($connect, $query);
            echo $query;   
            if($result){
                $query2 = "DELETE FROM booking WHERE idbooking= $idbooking";
                $result2 = mysqli_query($connect, $query2);
                echo $query2;
                
                if($result2){
                    if($_SESSION['level'] == 1){
                    header("location:bookingPageAdmin.php");
                    echo '<script type="text/javascript">';
                    echo 'alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
                    echo '</script>';
                               
                }
                else if($_SESSION['level'] == 2){
                    header("location:bookingPageUser.php");
                } 
                }
            } 
            else {
                echo "error insert";
            }
       
    } else {
        echo "Data gagal dihapus" . mysqli_error($connect);
        echo $check;
    }
?>