<html>
    <head>
         <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        include "../assets/view.php";
        
        
    ?>
    <title>Confirmed Page</title>
    </head>
    <body style="background-color: #262324;">
        
        <div class="container mt-5">
        <center></center><h4 style = "color: white">List of Confirmed Bookings:</h4></center>
        <a href="print.php" >
            <button type="button" class="btn mb-4" style = "background-color: f38181 ">Print</button>
        </a>
        <table class="table table-hover">
        <thead style = "background-color: #faf0f0;">
            <tr>
                <th><center>ID Confirmed</center></th>
                <th><center>ID Booking</center></th>
                <th><center>ID Movie</center></th>
                <th><center>ID User</center></th>
                <th><center>Total Price</center></th>
                <th><center>Confirmed Date</center></th>
            </tr>
        </thead>    
        

            <?php 
                include "../connection.php";

                $query = "SELECT * FROM confirmed";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {

                
            ?>
            <tbody style = "color : white ">
            <tr>     
                <td> <center><?php echo $row['idconfirm']?> </center></td>
                <td> <center><?php echo $row['idbooking']?> </center></td>
                <td><center> <?php echo $row['idmovie']?> </center></td>
                <td><center> <?php echo $row['iduser']?> </center></td>
                <td> <center><?php echo $row['totalprice']?> </center></td>
                <td><center> <?php echo $row['date_confirmed']?> </center></td>    
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