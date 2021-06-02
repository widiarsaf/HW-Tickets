<?php
    include "../assets/view.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Edit Data</title>
</head>
<body style="background-color: #262324; border: 0px;">
    <div class="container pt-3 add-data col col-4 mt-5 mb-5"
        style="background-color: #262324; border: 4px solid rgb(238, 110, 117) !important;">
        <center>
            <h4 class="pb-3 add-title" style="background-color: #262324; color:rgb(238, 110, 117) !important; ;">Edit
                Movie Data</h4>
        </center>
        <?php 
            include "../connection.php";
            $idmovie = $_GET['id'];
            $query = "SELECT * FROM movie WHERE idmovie = $idmovie";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php?id=<?php echo $idmovie;?>" enctype="multipart/form-data" method = "post">
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>

            <form action="insertProcess.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputMovie" style="color: white;">Movie Title</label>
                <input type="text" class="form-control" name="title" value = "<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputYear" style="color: white;">Year</label>
                <input type="text" class="form-control" name="year" value = "<?php echo $row['year'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputGenre" style="color: white;">Genre</label>
                <input type="text" class="form-control" name="genre" value = "<?php echo $row['genre'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice" style="color: white;">Price</label>
                <input type="text" class="form-control" name="price" value = "<?php echo $row['price'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputMovieCover" style="color: white;">Movie Cover</label>
                <input type="file" name="cover" class="form-control">
            </div>
            <br>
            <input type="submit" value="Edit Movie" class="btn mb-2" style="background-color: rgb(238, 110, 117) !important;">
             <?php 
                    }
            ?>
            <a href="movieUser.php"><input type="submit" value="Back" class="btn mb-2" style="border: 1px solid rgb(238, 110, 117) !important; background-color:262324 !important; color:white"></a>
        </form>
    </div> 
</body>
</html>