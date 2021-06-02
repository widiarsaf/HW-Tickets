<?php 
    session_start();
    include "../connection.php";

    $iduser = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
 

   $sql = "UPDATE user SET username = '$username', pass = '$password', email = '$email', phone = '$phone' WHERE iduser = '$iduser'";
    

        if(mysqli_query($connect, $sql)){
           
                header("location:userPage.php");
            
        }
        else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
                
        }
        

    mysqli_close($connect);
?>