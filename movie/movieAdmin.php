<html>
    <head>
        <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        include "../assets/view.php";
        
    ?>
    <title>Add Movie</title>
    </head>
    <body style="background-color: #262324;">
        
        <div class="container mt-5">
        <h3 style = "color: white";>Welcome <?php echo $_SESSION['username']?></h3>
        <a href="insertMovie.html"><button type="button" class="btn mb-4" style = "background-color: #f39d88"><b>+</b>Add Movie</button></a>
        <table class="table table-hover" >
        <thead style = "background-color: #faf0f0;">
            <tr>
                <th><center>ID Movie</center></th>
                <th><center>Cover </center></th>
                <th><center>Movie Title </center></th>
                <th><center>Year </center></th>
                <th><center>Genre</center></th>
                <th><center>Price</center></th>
                <th><center>Action<center></th>
            </tr>
        </thead>  
         
        

            <?php 
                include "../connection.php";

                $query = "SELECT * FROM movie";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {

                
            ?>
            <tbody style = "color: white;">
            <tr>     
                <td> <center><?php echo $row['idmovie']?></center> </td>
                <td> <center><img src= "uploads/<?php echo $row['cover'];?>" width='75' height='100'></center></td>
                <td> <center><?php echo $row['title']?></center> </td>
                <td> <center><?php echo $row['year']?> </center></td>   
                <td> <center><?php echo $row['genre']?></center> </td>  
                <td> <center><?php echo $row['price']?> </center></td>
                <td><center>
                    <a href="editMovie.php?id=<?php echo $row['idmovie'];?>">
                    <button type="button" class="btn btn-warning">Edit</button>
                    </a> 
                    &nbsp
                    <a href="deleteProcess.php?id=<?php echo $row['idmovie'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </center>
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