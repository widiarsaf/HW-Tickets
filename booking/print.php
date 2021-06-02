<html>
    <head>
         <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
        
    ?>
    <title>Confirmed Page</title>
    </head>
    <body>
        
        <div class="container mt-5">
        <center><h3 style = "color: black">---LIST OF CONFIRMED BOOKINGS---</h3></center>
        <br>
        <table class="table table-hover" style = "color : black;">
        <thead>
            <tr>
                <th>ID Confirmed</th>
                <th>ID Booking</th>
                <th>ID Movie</th>
                <th>ID User</th>
                <th>Total Price</th>
                <th>Date Confirmed</th>
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
            <tbody>
            <tr>     
                <td> <?php echo $row['idconfirm']?> </td>
                <td> <?php echo $row['idbooking']?> </td>
                <td> <?php echo $row['idmovie']?> </td>
                <td> <?php echo $row['iduser']?> </td>
                <td> <?php echo $row['totalprice']?> </td>
                <td> <?php echo $row['date_confirmed']?> </td>    
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
        <script>
		window.print();
	</script>
    </body>
</html>