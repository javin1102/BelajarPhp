<?php
    require 'functions.php';


    $mhs = query('SELECT * FROM mahasiswa');

    if(isset($_POST["search"])){
        $mhs = search($_POST["input"]);
        
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
    
    <a href="create.php">Register</a>
    <form action="" method="POST">
        <input type="text" placeholder="Input Keyword ..." name="input" size="40" id="keyword">
        <button type="submit" name="search" id="searchBtn">Search</button>
    </form>
    
    <div id="container">
        <table border = '1' cellspacing ='0' cellpadding ='5'>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1?>
            <?php foreach($mhs as $m){ ?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="update.php?id=<?= $m["id"]?>">Update</a> |
                    <a href="delete.php?id=<?= $m["id"] ?>">Delete</a>
                </td>

                <td><img src="" alt="<?=$m["gambar"]; ?>"></td>
                <td><?=$m["nrp"]; ?></td>
                <td><?=$m["nama"]; ?></td>
                <td><?=$m["email"]; ?></td>
                <td><?=$m["jurusan"]; ?></td>
            </tr>
            <?php  $i++;} ?>
        </table>

    </div>
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>
</html>