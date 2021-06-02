<?php
session_start();
include "connection.php";

$username = ($_POST['username']);
$password = ($_POST['password']);
$email = ($_POST['email']);
$phone = ($_POST['telephone']);

$query = "INSERT INTO user (pass, username, phone, email, level_user)
                VALUES ('$password', '$username', '$phone', '$email', 2)";

$sql = mysqli_query($connect, $query);


if($sql > 0){
    header("location:loginForm.php");
}
else {
    echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
}

    



?>
