<?php 
session_start();
echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';

if(isset($_SESSION['iduser'])){
    if($_SESSION['level'] == 1){
        ?>
        <header>
            <nav class=" navbar navbar-expand-sm navbar-light" style="background-color: #ff847c ;">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="../img/logo2.svg" style="height: 50px;" alt="Logo brand">
                        <b class="title-txt">HW Tickets</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../homeAdmin.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../movie/movieAdmin.php">Movie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../booking/bookingPageAdmin.php">Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../booking/confirmedPage.php">Confirmed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../user/userPage.php">User</a>
                            </li>
                            <li class="nav-item float-right" style="float: left;">
                                <a class="nav-link" href="../logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php
    }
    else if($_SESSION['level'] == 2){
        ?>
        <header>
            <nav class=" navbar navbar-expand-sm navbar-light" style="background-color: #ff847c ;">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="../img/logo2.svg" style="height: 50px;" alt="Logo brand">
                        <b class="title-txt">HW Tickets</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../homeUser.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../movie/movieUser.php">Movie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../booking/bookingPageUser.php">Booking</a>
                            </li>
                            <li class="nav-item float-right">
                                <a class="nav-link float-right " href="../logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php
    }
}
?>
<?php
 if(isset($_SESSION['success-insert'])){
     ?>
     <div class="container col-9 mt-4">
        <div class="alert alert-dismissible fade show" role="alert" style = "background-color: #d4596b !important; color: white">
            <strong>Failed To Login!</strong> <?php echo $_SESSION['success-insert']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php
    unset($_SESSION["success-insert"]);
 }
 ?>