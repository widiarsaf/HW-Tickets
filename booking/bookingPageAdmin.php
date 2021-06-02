<html>
    <head>
         <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        include "../assets/view.php";
        
        
    ?>
    <title>Booking Page</title>
    </head>
    <body style="background-color: #262324;">
        
        <div class="container mt-5">
        <h3 style = "color: white">Welcome <?php echo $_SESSION['username']?></h3>
        <table class="table table-hover">
        <thead style = "background-color: #faf0f0;">
            <tr>
                <th><center>ID Booking</center></th>
                <th><center>ID Movie</center></th>
                <th><center>ID User</center></th>
                <th><center>Date</center></th>
                <th><center>Price</center></th>
                <th><center>Quantity</center></th>
                <th><center>Total Price</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>    
        

            <?php 
                include "../connection.php";

                $query = "SELECT * FROM booking";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {

                
            ?>
            <tbody   style = "color : white">
            <tr>     
                <td> <center><?php echo $row['idbooking']?></center> </td>
                <td> <center><?php echo $row['idmovie']?></center> </td>
                <td> <center><?php echo $row['iduser']?> </center></td>
                <td> <center><?php echo $row['date']?></center> </td>   
                <td><center> <?php echo $row['price']?> </center></td>  
                <td><center> <?php echo $row['qty']?> </center></td>
                <td><center> <?php echo $row['totalprice']?></center> </td>   
                <td><center>
                    <a href="deleteProcess.php?id=<?php echo $row['idbooking'];?>" >
                    <button type="button" class="btn" style = "background-color: f38181 " data-toggle="modal" data-target="#exampleModal">Confirm</button>
                    </a></center>
                    
                </td> 
            </tr>

            </tbody>
            
            <?php

                }                
            }
            else{
            ?>
                <td colspan = "5">No Data</td>
            <?php
            }


            ?>
            
        </table>

        


        
        </div>
    </body>
</html>