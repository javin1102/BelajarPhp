<?php 

    require 'functions.php';

    if(isset($_POST["submit"])){
        
        if(create($_POST) > 0){
            echo "<script> alert('Data Updated!')
                    document.location.href = 'index.php'
            
                  </script>
                    
            
            ";
               
        }

        else{
            echo "<script> 
            alert('Data Failed To Update!')
            //document.location.href = 'index.php' 
            </script>";
        }
    }

    

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama: </label>
        <input type="text" placeholder="Masukan nama...." id="nama" name="nama">

        <br>
        <br>
        <label for="nrp">NRP: </label>
        <input type="text" placeholder="Masukan NRP...." id="nrp" name="nrp">

        <br>
        <br>
        
        <label for="email">Email: </label>
        <input type="text" placeholder="Masukan email...." id="email" name="email">
    
        <br>
        <br>

        <label for="jurusan">Jurusan: </label>
        <input type="text" placeholder="Masukan Jurusan...." id="jurusan" name="jurusan">
    
        <br>
        <br>

        <label for="gambar">Gambar: </label>
        <input type="file" placeholder="Masukan Gambar...." id="gambar" name="gambar">
        
        <br>
        <br>
        <button><a href="index.php">Back</a></button>
        <button type="submit" name="submit">Register</button>
        
    </form>
</body>
</html>