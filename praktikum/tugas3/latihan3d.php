<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 12 Februari 2021
    latihan 3d Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php 
$names = [
    [    
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assists" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assists" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assists" => "348"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assists" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assists" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assists" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assists" => "12"
    ]
];

$total_main = 0;
$total_gol = 0;
$total_assists = 0;

foreach ($names as $item => $value) {
    $total_main += $value['main'];
    $total_gol += $value['gol'];
    $total_assists += $value['assists'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3D Praktikum PW</title>
    <style>
        table,th,td {
            border-collapse:collapse;
        }
        th,td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSISTS</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($names as $name) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $name["nama"] ?></td>
            <td><?= $name["club"] ?></td>
            <td><?= $name["main"] ?></td>
            <td><?= $name["gol"] ?></td>
            <td><?= $name["assists"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <tr>
            <th>#</th>
            <th colspan="2">
            <center>Jumlah</center>
            </th>
            <th><?= $total_main ?></th>
            <th><?= $total_gol ?></th>
            <th><?= $total_assists ?></th>
        </tr>    
    </table>
</body>
</html>