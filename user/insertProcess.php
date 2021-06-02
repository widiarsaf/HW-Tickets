<?php 
    include "../connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];

        $query = "INSERT INTO user (pass, username, phone, email, level_user)
                VALUES ( '$password', '$username', '$phone', '$email', '$level')";

        if(mysqli_query($connect, $query)){
            header("location:userPage.php");
        }
        else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
            
        }

    mysqli_close($connect);

?>