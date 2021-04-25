<?php 
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

//Mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$row = query("SELECT * FROM buku WHERE id= $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
        <h1>Buku</h1>
        <div class="card border border-primary" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4 mt-3 pl-2">
                    <img src="../assets/gambar/<?= $row["gambar"]; ?>" class="card-img border border-dark">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title m-1"><?= $row["Judul"] ?></h5>
                            <ul>
                                <li class="card-text"><?= $row["Pengarang"] ?></li>
                                <li class="card-text"><?= $row["Terbit"] ?></li>
                                <li class="card-text"><?= $row["Dimensi"] ?></li>
                                <li class="card-text"><?= $row["ISBN"] ?></li>
                            </ul>
                        <button class="tombol-kembali btn btn-outline-primary"><a href="../index.php">kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>