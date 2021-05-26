<?php
/*
    Fresabayu Anggoro
    203040137
    Kelas D Informatika
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php
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


  <style>
    body {
      background-image: linear-gradient(red, yellow, green, blue);
      margin: 50px;
      padding: 25px;
    }

    .card {
      /* background-image: linear-gradient(yellow, blue, red, black); */
      padding: 10px;
    }
  </style>

</head>

<body>
  <div class="container">
    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Daftar Anime</h1>
    <a href="php/login.php" class="btn btn-primary w-50" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Masukkan Kehalaman Admin</a>
    <div class="card mt-4">
      <div class="card-body">
        <?php $i = 1 ?>
        <?php foreach ($anim as $row) : ?>
          <div class="card" style="width: 18rem;">
            <img src="assets/gambar/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
            <div class="col-md">
              <div class="card-body">
                <h5 class="card-title"><?= $row["Judul"]; ?></h5>
                <p class="card-text"></p>
                <a href="php/detail.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        <?php endforeach;  ?>
      </div>
    </div>
  </div>



  <script src="assets/js/bootstrap.js"></script>
</body>

</html>