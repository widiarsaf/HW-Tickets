<?php 
    session_start();
    include "assets/notif.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/animate.css" rel="stylesheet">
</head>

<body style="background-color: #262324;">

    <div>
        <center>
            <div style="margin-top: 50px; display: flex; justify-content: center;">
                <div><img src="img/logo2.svg" style="height: 100px;" alt="Logo brand"></div>
                <div>
                    <h2 class="title-txt" style="color: #ff847c; margin-top: 20px; font-size: 50px; margin-left: 10px;">
                        HW Tickets</h2>
                </div>
            </div>
        </center>

        <div class="container col-9 mb-4"
            style="box-shadow:-4px -4px 23px 7px rgba(97,97,97,0.08); margin-top: 30px; border-radius: 10px; ">

            <div class=" row" style="display: flex; padding: 20px; justify-content: space-evenly;">
                <div class="col-md-6" style="background-color: #262324; display: flex; justify-content: center; 
               ">
                    <img src=" img/ilus2.svg" alt="" style="width: 350px;">
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col" style="background-color: #262324;">
                            <div class="card rounded-20" style="background-color: #262324; border: 0px;">
                                <div class="card-header" style="display: flex; justify-content: center; ">
                                    <h3 class="mb-0" style="color: white;">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form mb-3" role="form" autocomplete="off" id="formLogin" novalidate=""
                                        method="POST" action="validateLogin.php">
                                        <div class="form-group">
                                            <label for="uname1" style="color: white;">Username</label>
                                            <input type="text" class="form-control form-control-md rounded-2"
                                                name="username" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label style="color: white;">Password</label>
                                            <input type="password" class="form-control form-control-md rounded-2"
                                                autocomplete="new-password" name="password"
                                                placeholder="Enter password">
                                        </div>
                                        <button type="submit" class="btn" style="background-color: #f38181; color: white;width:
                                        100px;">Login</button>
                                    </form>
                                    <center>
                                        <p style="color: white;">Don't Have Account? <a href="signupForm.html"
                                                style="color: #ff847c;">Sign
                                                Up</a></p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>