<?php
    $connection = mysqli_connect('localhost','root','','phpdasar');
    
    function query($query){
        global $connection;
        $result = mysqli_query($connection,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;

    }

    function create($data){
        global $connection;
        $nama = htmlspecialchars($data['nama']);
        $nrp = htmlspecialchars($data['nrp']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $gambar = upload();
        if(!$gambar){
            return false;
        }
        //echo $gambar;
        $query = "INSERT INTO mahasiswa VALUES ('','$nama',
                                                   '$nrp',
                                                   '$email',
                                                   '$jurusan',
                                                   '$gambar')";
        
        mysqli_query($connection,$query);

        return mysqli_affected_rows($connection);
    }

    function upload(){
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmp = $_FILES["gambar"]["tmp_name"];
        
        if($error === 4){
            echo "<script>alert('Pilih gambar terlebih dahulu')</script>";
            return false;
        
        }
        
        $ext = ['jpg','jpeg','png'];
        $extGambar = explode('.',$fileName);
        $extGambar = strtolower(end($extGambar));

        if(!in_array($extGambar,$ext)){
            echo "<script>alert('Gambar Coy!')</script>";
            return false;
        }

        if($fileSize > 20000000){
            echo "<script>alert('Gambar Besar Coy!')</script>";
            return false;
        }
        
        $newFileName = uniqid();
        $newFileName.= '.';
        $newFileName .= $extGambar;


        move_uploaded_file($tmp,'img/'.$newFileName);
        return $newFileName;


    }

    function delete($id){
        global $connection;
        $query = "DELETE FROM mahasiswa WHERE id ='$id'";
        mysqli_query($connection,$query);

        return mysqli_affected_rows($connection);
    }

    function update($data,$id){
        global $connection;
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $gambar = htmlspecialchars($data['gambar']);

        $query = "UPDATE mahasiswa SET nama = '$nama',
                                       email = '$email',
                                       jurusan = '$jurusan',
                                       gambar = '$gambar'
                                    WHERE id = '$id'";
    
        mysqli_query($connection,$query);
        return mysqli_affected_rows($connection);

    }

    function search($input){
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$input%'OR
                                                nrp LIKE '%$input%'OR
                                                email LIKE '%$input%'OR
                                                jurusan LIKE '%$input%'";
                                               
        return  query($query);
    }


?>