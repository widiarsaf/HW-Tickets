<html>
    <head>
         
    <?php
        include "../connection.php";
        include "../assets/view.php"; 
    ?>
    <title>Your Bookings</title>
    <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body style="background-color: #0f0e0f;">
        
        <div class="container mt-5">
            
        <div class="container">
        <h1 style = "color: wheat">Hi <?php echo $_SESSION['username']?>!</h1>
        <h5 style = "color: wheat" style = "margin-left: 20px !important;" >List Booking Movie:</h5>
        <div class="container">
            <div class="row row-cols-3" style = "display:flex;"> 
        

            <?php 
                include "../connection.php";
                $iduser = $_SESSION['iduser'];
                $query = "SELECT * FROM booking where iduser = '$iduser'" ;
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result))
                {
                    $idmovie = $row['idmovie'];
                    $query = "SELECT * FROM movie where idmovie = '$idmovie'" ;
                    $result2 = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2))
                            {
                
            ?>
            <div class="row row-cols-3">
                <div class="col mb-5" style = "margin: 30px !important">
                    <div class="card" style="width: 18rem; background-color : #262324; margin: 0 0px;">
                        <div class="card-body">
                            <center><h5 class="card-title" style = "color:#e84a5f ">Ticket No: <br> <?php echo $row['idbooking']?></h5></center>
                            <p style = "color:white">ID Movie : <?php echo $row['idmovie']?></p>
                            <p style = "color:white">Title : <?php echo $row2['title']?></p>
                            <p style = "color:white">Name: <?php echo $_SESSION['username']?></p>
                            <p style = "color:white">Date : <?php echo $row['date']?></p>
                            <p style = "color:white">IDR : <?php echo $row['price']?></p>
                            <p style = "color:white">Quantity : <?php echo $row['qty']?></p>
                            <p style = "color:white">Total IDR : <?php echo $row['totalprice']?></p>
                            
                                <center><a href="editBooking.php?id=<?php echo $row['idbooking'];?>">
                                <button type="button" class="btn btn-warning">Edit</button>
                                </a> 
                                &nbsp
                                <a href="deleteProcess.php?id=<?php echo $row['idbooking'];?>">
                                <button type="button" class="btn btn-danger">Cancel</button>
                                </a></center>
                        
                        </div>
                    </div>
                </div>
            </div>

            
            
            <?php

                }                
            }
        }
    }
            else{
            ?>
                <h6 style = "color:#cfc7c6; margin-top:20px;">You haven't booking yet</h6>
            <?php
            }


            ?>
            
        </table>
        </div>
    </body>
</html>