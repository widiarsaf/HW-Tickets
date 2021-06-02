<?php
    include "../assets/view.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Booking Movie</title>
</head>
<body style="background-color: #262324;">


<div class="container col-9 mt-5 mb-4"
        style="box-shadow:-4px -4px 23px 7px rgba(97,97,97,0.08); margin-top: 30px; border-radius: 10px; ">

        <div class=" row" style="display: flex; padding: 20px; justify-content: space-evenly;">
            <div class="col-md-6" style="background-color: #262324; display: flex; justify-content: center;">
                <img src="../img/gif.gif" alt="" style="width: 470px; border-radius: 20px;">
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="background-color: #262324;">
                        <div class="card rounded-20" style="background-color: #262324; border: 0px;">
                            <div class="card-header" style="display: flex; justify-content: center; ">
                                <h3 class="mb-0" style="color: white;">Booking Movie</h3>
                            </div>
                                    <?php 
                                        include "../connection.php";
                                        $idbooking = $_GET['id'];
                                        $query = "SELECT * FROM booking WHERE idbooking = $idbooking";
                                        $result = mysqli_query($connect, $query);
                                    ?>
                                <div class="card-body">
                                <form action="editProcess.php?id=<?php echo $idbooking;?>" enctype="multipart/form-data" method = "post">
                                            <?php 
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                        <div style = "display: flex; justify-content: space-between;">
                                            <div class="form-group">
                                                <label for="exampleInputYear" style= "color : white">ID Movie</label>
                                                <input type="text" class="form-control" name="idmovie" value = "<?php echo $row['idmovie'];?>" readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputGenre" style= "color : white">ID User</label>
                                                <input type="text" class="form-control" name="iduser" value = "<?php echo $_SESSION['iduser']?>"  readonly="readonly">
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPrice" style= "color : white">Date</label>
                                            <input type="date" class="form-control" name="date">
                                        </div>
                                       
                                        <div style = "display: flex; justify-content: space-between;">
                                            <div class="form-group">
                                                <label for="exampleInputPrice" style= "color : white">IDR</label>
                                                <input type="text" class="form-control" name="price" value = "<?php echo $row['price'];?>"  readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPrice" style= "color : white">Quantity</label>
                                                <input type="number" class="form-control" name="qty">
                                            </div>
                                        </div>
                                        

                                        
                                        <br>
                                        <input type="submit" value="Edit Booking" class="btn" style="background-color: #f38181; color: white;">
                                        <?php 
                                                }
                                        ?>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>