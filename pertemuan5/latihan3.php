<?php 
$mahasiswa = [
    ["Fresabayu A", "203040137", "Teknik Informatika",
    "203040137@mail.unpas.ac.id"],
    ["Bahrul Ulum", "203040090", "Teknik Informatika",
    "203040090@mail.unpas.ac.id"],
    ["Chandra Arcychan A", "203040151", "Teknik Informatika",
    "203040151@mail.unpas.ac.id"]
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

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
            <li>Nama : <?= $mhs[0] ?></li>
            <li>NRP : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>