<?php
require '../function.php';
$row = cari($_GET['keyword']);
?>
<table border="1" cellpadding="15" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Judul</th>
    <th>Genre</th>
    <th>Status</th>
    <th>Studio</th>
    <th>Source</th>
  </tr>

  <?php if (empty($anim)) : ?>
    <tr>
      <td colspan="9">
        <h1>Data tidak ditemukan</h1>
      </td>
    </tr>
  <?php else : ?>
    <?php $i = 1 ?>
    <?php foreach ($anim as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $row['id']; ?>"><button class="btn btn-info w-10">Ubah</button></a> <br>
          <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="btn btn-success w-10">Hapus</button></a>
        </td>
        <td><img src="../assets/gambar/<?= $row["gambar"]; ?>" alt=""></td>
        <td><?= $row["Judul"] ?></td>
        <td><?= $row["Genre"] ?></td>
        <td><?= $row["Status"] ?></td>
        <td><?= $row["Studio"] ?></td>
        <td><?= $row["Source"] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</table>

<script src="js/script.js"></script>