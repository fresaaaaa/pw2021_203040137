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
    <title>Latihan </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <style>
    body {
    background-color:yelloww;
    }
	.kotak{
		border: 1px solid #cecece;
		border-radius: 3px;
		padding: 3px 10px;
		box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
		color: white;
		background-color: red;
	}
	.kotak:hover{
		border: 1px solid #b1b1b1;
		box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
	}
	</style>
</head>
<body>
<div class="container">
<h1>Buku</h1>

<div class="add">
    <a href="tambah.php"><button class="kotak"> tambah data </button></a>
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
                <a href=""><button class="kotak">Ubah</button></a>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="kotak" >Hapus</button></a>
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
  </div>
</body>
</html>