<?php 
// Array
// variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki type data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 element pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);









?>