<?php 
    require 'functions.php';
    $id = $_GET["id"];
    if(delete($id) > 0){
        echo "<script> alert('Data Deleted!')
        document.location.href = 'index.php'
        </script>
        ";
    }
    else{
        echo "<script> alert('Failed to Delete!')
        document.location.href = 'index.php'
        </script>
        ";

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
    <form action="" method="GET">

    </form>
</body>
</html>