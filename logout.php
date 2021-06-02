<?php
session_start();
unset($_SESSION['iduser']);
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
header("Location:home.html");
?>