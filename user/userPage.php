<html>
    <head>
        <link rel="stylesheet" href="../assets/style.css">
    <?php
        include "../connection.php";
        include "../assets/view.php";
        
    ?>
    <title>List User</title>
    </head>
    <body style="background-color: #262324;">
        <div class="container mt-5">
        <h3 style = "color: white";>Welcome <?php echo $_SESSION['username']?></h3>
         <a href="insertUser.html"><button type="button" class="btn mb-5" style = "background-color: #f39d88; border: 0px;" ><b>+</b>Add User</button></a>
        <h5 style ="color:white">Table Admin</h5>
         <table class="table table-hover mb-2 mt-2">
        <thead style = "background-color: #faf0f0;">
            <tr>
                <th><center>ID User</center></th>
                <th><center>Username</center></th>
                <th><center>Password</center></th>
                <th><center>Email</center></th>
                <th><center>Phone</center></th>
                <th><center>Level</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>    
        

            <?php 
                include "../connection.php";
                $level = 1;
                $query = "SELECT * FROM user WHERE level_user = '$level'";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {

                
            ?>
            <tbody  style ="color:white">
            <tr>     
                <td> <center><?php echo $row['iduser']?></center> </td>
                <td> <center><?php echo $row['username']?> </center></td>
                <td><center> <?php echo $row['pass']?> </center></td>   
                <td><center> <?php echo $row['email']?></center> </td>  
                <td><center> <?php echo $row['phone']?> </center></td>
                <td> <center><?php echo $row['level_user']?> </center></td>   
                <td>
                    <a href="editUser.php?id=<?php echo $row['iduser'];?>">
                    <button type="button" class="btn btn-warning">Edit</button>
                    </a> 
                    &nbsp
                    <a href="deleteProcess.php?id=<?php echo $row['iduser'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a>
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

        <h5 style ="color:white; margin-top:50px;">Table Customer</h5>
        <table class="table table-hover mb-5 mt-2">
        <thead style = "background-color: #faf0f0;">
            <tr>
                <th><center>ID User</center></th>
                <th><center>Username</center></th>
                <th><center>Password</center></th>
                <th><center>Email</center></th>
                <th><center>Phone</center></th>
                <th><center>Level</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>    
        

            <?php 
                include "../connection.php";

                $level = 2;
                $query = "SELECT * FROM user WHERE level_user = '$level'";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result))
                {

                
            ?>
            <tbody  style ="color:white">
            <tr>     
                <td> <center><?php echo $row['iduser']?> </center></td>
                <td><center> <?php echo $row['username']?> </center></td>
                <td> <center><?php echo $row['pass']?> </center></td>   
                <td><center> <?php echo $row['email']?> </center></td>  
                <td> <center><?php echo $row['phone']?></center> </td>
                <td> <center><?php echo $row['level_user']?></center> </td>   
                <td>
                    <a href="editUser.php?id=<?php echo $row['iduser'];?>">
                    <button type="button" class="btn btn-warning" disabled>Edit</button>
                    </a> 
                    &nbsp
                    <a href="deleteProcess.php?id=<?php echo $row['iduser'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a>
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