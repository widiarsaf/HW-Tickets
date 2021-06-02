<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Edit Data</title>
    <?php
        include "../assets/view.php";
    ?>
</head>
<body style="background-color: #262324;">
    <div class = "container pt-3 add-data col col-4 mt-5" style="border:2px solid rgb(238, 110, 117) !important;">
    <center> <h4 class = "pb-3 text-primary add-title" style="color:rgb(238, 110, 117) !important;">Edit Data</h4></center>
        <?php 
            include "../connection.php";
            $iduser = $_GET['id'];
            $query = "SELECT * FROM user WHERE iduser = $iduser";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php?id=<?php echo $iduser;?>" method = "post">
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
            <div class="form-group">
                <label for="exampleInputPassword1" style="color: white;">Username</label>
                <input type="text" class="form-control" name="username" value = "<?php echo $row['username'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Password</label>
                <input type="text" class="form-control" name="password" value = "<?php echo $row['pass'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Email</label>
                <input type="email" name="email" class="form-control" value = "<?php echo $row['email'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Phone</label>
                <input type="text" name="phone" class="form-control" value = "<?php echo $row['phone'];?>">
            </div>
            <input type="submit" value="Edit User" class="btn mb-2" style="background-color: rgb(238, 110, 117) !important;">
            <a href="userPage.php"><input type="submit" value="Back" class="btn mb-2" style="border: 1px solid rgb(238, 110, 117) !important; background-color:#262324 !important; 
                color:white; width: 100px;"></a>
             <?php 
                    }
            ?>
        </form>
    </div> 
</body>
</html>