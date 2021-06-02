<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];


$sql = mysqli_query($connect,"SELECT * FROM user WHERE pass='$password' AND username='$username'");
$check = mysqli_num_rows($sql);

if($check > 0){
    $userdata = mysqli_fetch_assoc($sql);
    if($userdata['level_user'] == 1 ){
        $_SESSION['iduser'] = $userdata['iduser'];
        $_SESSION['username'] = $userdata['username'];
        $_SESSION['level'] = 1;
        header("location:homeAdmin.html");
    }

    else if ($userdata['level_user'] == 2) {
        $_SESSION['iduser'] = $userdata['iduser'];
        $_SESSION['username'] = $userdata['username'];
        $_SESSION['level'] = 2;
        header("location:homeUser.html");

    }
    else{
        echo "user level tidak ditemukan";
    }
}
else{
    $sql2 = mysqli_query($connect, "select * from user where username='$username'");
    $check2 = mysqli_num_rows($sql2);

    if($check2 > 0){
        
        $_SESSION['wrong-pass'] = "You entered wrong password";
        header("location:loginForm.php");
    }
    else{
        $_SESSION['wrong-user'] = "Username not found";
        header("location:loginForm.php");
    }
}



?>
