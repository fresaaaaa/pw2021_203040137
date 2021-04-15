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
// mengubungkan dengan file php lainnya
require 'function.php';

// melakukan queri
$book = query("SELECT * FROM buku")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="add">
    <a href="tambah.php">tambah data</a>
</div>
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Terbit</th>
            <th>Dimensi</th>
            <th>ISBN</th>
        </tr>
        <?php $i = 1 ?>
          <?php foreach( $book as $row ) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href=""><button>Hapus</button></a>
            </td>
            <td><img src="../assets/gambar/<?= $row["gambar"]; ?>" alt=""></td>
            <td><?= $row["Judul"] ?></td>
            <td><?= $row["Pengarang"] ?></td>
            <td><?= $row["Terbit"] ?></td>
            <td><?= $row["Dimensi"] ?></td>
            <td><?= $row["ISBN"] ?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
    </table>

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