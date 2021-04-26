<<<<<<< HEAD
<?php
/*
    Fresabayu Anggoro
    203040137
    Pertemuan ke - 7 (19 februari 2021)
    Get & POST
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
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


// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?=$mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
=======
<?php
/*
    Fresabayu Anggoro
    203040137
    Pertemuan ke - 7 (19 februari 2021)
    Get & POST
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
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


// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?=$mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
>>>>>>> 00459d08372ca6203f3091a76dc9bdc279e2ff98
</html>