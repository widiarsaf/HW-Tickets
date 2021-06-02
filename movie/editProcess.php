<?php 
    session_start();
    include "../connection.php";
    include "../assets/view.php";


    $idmovie = $_GET['id'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $cover = $_FILES['cover']['name'];
    $cover_tmp = $_FILES['cover']['tmp_name'];

    $angka_acak = rand(1,999);
    $cover_baru = $angka_acak.'-'.$cover;

    if(empty($cover)){
        $sql = "UPDATE movie SET 
        title = '$title', 
        year = '$year',
        genre = '$genre',
        price = '$price'
        WHERE idmovie = '$idmovie'";

        if(mysqli_query($connect, $sql)){
            
            if($_SESSION['level'] == 1){
                header("location:movieAdmin.php");
           }
           else if($_SESSION['level'] == 2){
               header("location:movieUser.php");
           }
           
        }
        else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
                
        }
        
    }

    else{
        $coverbaru = date('dmYHis').$cover;
        $path = "uploads/".$coverbaru;
        if(move_uploaded_file($cover_tmp, $path)){
            $sql = "SELECT cover FROM movie WHERE idmovie=$idmovie";
            $query = mysqli_query($connect, $sql);
            $data = mysqli_fetch_assoc($query);
    
            if(is_file("uploads/".$data['cover'])) 
            unlink("uploads/".$data['cover']);

            $sql = "UPDATE movie SET 
                    title = '$title', 
                    year = '$year',
                    genre = '$genre',
                    price = '$price',
                    cover = '$coverbaru'
                    WHERE idmovie = '$idmovie'";

            if(mysqli_query($connect, $sql)){
                
                    header("location:movieAdmin.php");
                
            }
            else{
                echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
                
            }
        }
        else{
            echo "There was an error uploading the file, please try again!";
        }
    }
    

    mysqli_close($connect);

?>