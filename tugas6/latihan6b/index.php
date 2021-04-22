<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00 
    latihan 5a Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php 
// Menghubungkan dengan file phplainnya
require 'php/function.php';
// Melakukan query dari database
$book = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container"><br>
    <h3>Buku</h3>
    <a href="php/login.php">
      <button type=""> Masuk ke halaman admin</button>
    </a>
     <div class="card mt-4">
      <div class="card-body">
          <?php $i = 1 ?>
            <?php foreach( $book as $row ) : ?>
              <p class="judul">
                <a href="php/detail.php?id=<?= $row['id'] ?>">
                <img src="assets/gambar/<?= $row["gambar"]; ?>">
              </a>
            </p>  
          <?php endforeach;  ?>
      </div>
    </div>
  </div>




  <script src="assets/js/bootstrap.js"></script>
</body>
</html>