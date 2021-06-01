<?php
/*
    Fresabayu Anggoro
    203040137
    Kelas D Informatika
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/


session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
