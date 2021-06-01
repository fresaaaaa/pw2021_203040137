<?php
/*
    Fresabayu Anggoro
    203040137
    Kelas D Informatika
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/



session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';
$id = $_GET['id'];

if (hapus($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'admin.php';
         </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'admin.php';
         </script>";
}
