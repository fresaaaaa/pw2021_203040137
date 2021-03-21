<?php
/*
    Fresabayu Anggoro
    203040137
    Pertemuan ke - 6 (10 februari 2021)
    Array Associative
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>


<?php 

// $mahasiswa = [
//     ["Fresabayu A", "203040137"
// ,"fresabayu0601@gmail.com", "Teknik Informatika"],
//     ["Bahrul ulum", "203040090"
// ,"bahrul.ulum@gmail.com", "Teknik Informatika"]
// ]

// // Array Associative
// // definisinya sama seperti array numerik, kecuali
// // key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Fresabayu Anggoro",
        "npm" => "203040137",
        "email" => "fresabayu0601@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Siti Wasillah Djuniakh",
        "npm" => "203020138",
        "email" => "wassilah.siti10@gmail.com",
        "jurusan" => "Teknik Pangan",
        "gambar" => "2.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NPM : <?= $mhs["npm"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>