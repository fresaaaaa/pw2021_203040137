<?php
/*
    Fresabayu Anggoro
    203040137
    Kelas D Informatika
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/

// Menghubungkan dengan file phplainnya
require 'php/function.php';
// Melakukan query dari database
$anim = query("SELECT * FROM anime");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


  <style>
    body {
      background-image: linear-gradient(grey, white);
    }

    .inner {
      overflow: hidden;
    }

    .inner img {
      transition: all 1.5s ease;
    }

    .inner:hover img {
      transform: scale(1.5);
    }


    .card {
      background-image: linear-gradient(grey, grey);
      padding: 10px;
    }

    .footer {
      background-color: #333;
      padding: 10px;
    }


    .footer .copy {
      color: #eaeaea;
      text-align: center;
      font-size: 12px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
  </style>

</head>

<body>
  <div class="container">
    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Daftar Anime</h1>
    <a href="php/login.php" class="btn btn-primary w-100" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display:block;">Masukkan Kehalaman Admin</a>
    <div class="row justify-content-center">
      <div class="col md-4">
        <div class="card-body md-4">
          <div class="card shadow" style="width: 15rem;">
            <div class="inner">
              <img src="assets/gambar/onepiece.png" class="card-img-top" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">One Piece</h5>
              <a href="php/detail.php?id=1" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col md-4">
        <div class="card-body md-4">
          <div class="card shadow" style="width: 15rem;">
            <div class="inner">
              <img src="assets/gambar/naruto.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Naruto Shippuden</h5>
              <a href="php/detail.php?id=2" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col md-4">
        <div class="card-body md-4">
          <div class="card shadow" style="width: 15rem;">
            <div class="inner">
              <img src="assets/gambar/bc.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Black Clover</h5>
              <a href="php/detail.php?id=3" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="footer">
    <p class="copy">Copyright 2021. Fresa BA.</p>
  </div>
  </div>


  <script src="assets/js/bootstrap.js"></script>
</body>

</html>