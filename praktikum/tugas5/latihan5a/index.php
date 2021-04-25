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
    <title>Latihan 4C Prak PW</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container">
    <div class="card mt-4">
      <div class="card-body">
        <h2 class="display-5">Books</h2>
        <table id="table" class="table table-bordered table-striped table-hover text-center">
          <tbody>
          <?php $i = 1 ?>
          <?php foreach( $book as $row ) : ?>
            <p class="judul">
              <a href="php/detail.php?id=<?= $row['id'] ?>">
                <img src="assets/gambar/<?= $row["gambar"]; ?>">
              </a>
            </p>  
          <?php endforeach;  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="footer">
              <div>
                  <h6 class="footer_title">FOLLOW</h6>
                  <a href="https://www.instagram.com/fresa.ba/" class="footer_social" target="_blank"><i class='bx bxl-instagram'></i></a>
                  <a href="https://twitter.com/BaFresa" class="footer_social" target="_blank"><i class='bx bxl-twitter'></i></a>
              </div>
          </div>

          <div class="footer-copyright white-text">
            <hr>
            <p class="copyright">&copy; Website Created by Fresaaaa. Copyright © 2021.</p>
            </div>
      </footer>


  <script src="assets/js/bootstrap.js"></script>
</body>
</html>