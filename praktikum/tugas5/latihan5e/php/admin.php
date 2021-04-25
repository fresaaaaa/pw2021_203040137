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
//Menghubungkan dengan file phplainnya
require 'function.php';

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $book = query("SELECT * FROM buku
          WHERE
    Judul LIKE '%$keyword%' OR
    Pengarang LIKE '%$keyword%' OR
    Terbit LIKE '%$keyword%' OR
    Dimensi LIKE '%$keyword%' OR
    ISBN LIKE '%$keyword%' 
    ");
} else {
  $book = query("SELECT * FROM buku");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <style>
body {
    background-color:yelloww;
    margin:50px;
    padding:25px;
    }
.kotak{
		border: 1px solid #cecece;
		border-radius: 3px;
		
		box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
		color: white;
		background-color: red;
        border-radius: 10px;
}
.kotak:hover{
		border: 1px solid #b1b1b1;
		box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
	}
.footer{
    background-color: slategrey;
    text-align: center;
}

.footer_title{
    font-size: 20px;
    color: white;
}

.footer_copyright {
    text-align: center;
}

.footer_link{
    color: white;
}
.footer_link:hover{
    color: rgb(174, 247, 56);
}
.footer_social{
    font-size: 1.6rem;
}
.footer_social:hover{
    color: red;
}

	</style>
</head>
<body>
<div class="container">

<div class="add">
    <a href="tambah.php"><button class="kotak"> tambah data </button></a>
    <br><br>
    <form action="" method="get" style="float: left;" class="form">
        <input type="text" name="keyword" size="30" placeholder="Cari Di sini!" autocomplete="off" autofocus>
        <button type="submit" name="cari" class="btn btn-outline-success rounded-pill">Cari!</button>
    </form>
</div>

<br><br>

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

        <?php if (empty($book)) : ?>
        <tr>
            <td colspan="8">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
        <?php else : ?>
        <?php $i = 1 ?>
          <?php foreach( $book as $row ) : ?>
          <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id']; ?>"><button class="kotak">Ubah</button></a>
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
        <?php endif; ?>
    </table>

    <footer class="footer">
              <div>
                  <h6 class="footer_title">FOLLOW</h6>
                  <a href="https://www.instagram.com/fresa.ba/" class="footer_social" target="_blank"><i class='bx bxl-instagram'></i></a>
                  <a href="https://twitter.com/BaFresa" class="footer_social" target="_blank"><i class='bx bxl-twitter'></i></a>
                  <p class="copyright">&copy; Website Created by Fresaaaa. Copyright © 2021.</p>
              </div>
          </div>
      </footer>


  <script src="assets/js/bootstrap.js"></script>
  </div>
</body>
</html>