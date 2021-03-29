<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00 
    latihan 4a Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php 

$conn = mysqli_connect("localhost","root","");

$check = mysqli_select_db($conn, "pw_tubes_203040137");

$result = mysqli_query($conn, "SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4A Prak PW</title>
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
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Terbit</th>
              <th>Dimensi</th>
              <th>ISBN</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1 ?>
          <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><img src="assets/gambar/<?= $row["gambar"]; ?>"></td>
              <td><?= $row["Judul"] ?></td>
              <td><?= $row["Pengarang"] ?></td>
              <td><?= $row["Terbit"] ?></td>
              <td><?= $row["Dimensi"] ?></td>
              <td><?= $row["ISBN"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
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