<?php 
    require '../functions.php';
    $keyword = $_GET["keyword"];

    //$query = "SELECT * FROM mahasiswa";
    $mahasiswa = search($keyword); 

?>

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
            <?php foreach($mahasiswa as $m){ ?>
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
