<html>
    <head>
        <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        include "../assets/view.php";
        
    ?>
    <title>List Movie</title>
    </head>
    <body style = "background-color:#0f0e0f">
    <div class="jumbotron" style="height: 550px !important; background-color:#141212;">
        <div style = "margin-top: -60px">
        <div class="container" style="margin-top:10px">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/interstellar.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/littlewomen.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/lalaland.jpg">

                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    </div>
    


        <div class="container mt-5">
        
        <div class="container">
            <h1 style = "color: wheat">Hi <?php echo $_SESSION['username']?>!</h1>
            <div class="row row-cols-3" style = "display:flex;">

            <?php 
                include "../connection.php";

                $query = "SELECT * FROM movie";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {             
            ?>
             <div class="row row-cols-3">
                <div class="col mb-5 mt-5" style = "margin: 40px !important">
                    <div class="card mb-5" style="width: 12rem; background-color : #262324;">
                        <img class="card-img-top" src= "uploads/<?php echo $row['cover'];?>" style = "height : 250px">
                        <div class="card-body">
                            <center><h5 class="card-title" style = "color:#e84a5f "><?php echo $row['title']?></h5></center>
                            <center><p style = "color:white">IDR : <?php echo $row['price']?></p></center>
                            <center><a href="../booking/insertBooking.php?id=<?php echo $row['idmovie'];?>">
                                <button type="button" class="btn" style= "background-color: #e84a5f; 
                                margin-top: 10px; color : white; border-radius:50px; width: 120px" ><b>Booking</b></button>
                            </a></center>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <?php

                }                
            }
            else{
            ?>
                <td colspan = "5">No Data</td>
            <?php
            }


            ?>
            
            </div>
        </div>
        </div>
        <div>

        <div class="card text-center" style="border: 0px;">
        <div class="card-body"
            style="background-color: #fa5c50 ; background-repeat: no-repeat; background-size: cover; ">
            <h1 id="title-footer" style="color: black; font-family: serif;">HW Cinema</h1>
            <p class="text" style="color: black;">This Website was created to to fulfill the big project of

            </p>
            <p>
                <p style="color: #000000 !important;">
                "Web Design and Programming"
            </p>

        </div>
        <div class="card-footer" style="background-color: #ee3a3a; color:aliceblue;">
            <b>&copy Hanum&Widi Company's</b>
        </div>
        </div>
        </div>

        
    </body>
</html>