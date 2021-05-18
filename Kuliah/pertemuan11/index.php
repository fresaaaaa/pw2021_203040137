<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <div class="container">
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
      <input type="text" name="keyword" size="50" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>


      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="7">
            <p style="color: red; font-style:italic;"><B> Data mahasiswa tidak di temukan </B></p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="img/<?php echo $row["gambar"]; ?>" width="75"></td>
          <td><?= $row["nrp"]; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["jurusan"]; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>



</body>

</html>