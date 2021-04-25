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
$books = [
        [
        "Judul" => "Outliers",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "18 November 2008",
        "Dimensi" => "304 halaman",
        "ISBN" => "9780141036243",
        "gambar" => "a.png"
    ],
    [
        "Judul" => "Blink",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "11 Januari 2005",
        "Dimensi" => "330 halaman",
        "ISBN" => "9781586217617",
        "gambar" => "b.png"
    ],
    [
        "Judul" => "The Tipping Point",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "2000",
        "Dimensi" => "304 halaman",
        "ISBN" => "9781586217457",
        "gambar" => "c.png"
    ],
    [
        "Judul" => "Talking to Strangers",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "10 September 2019",
        "Dimensi" => "400 halaman",
        "ISBN" => "9781549100017",
        "gambar" => "d.png"
    ],
    [
        "Judul" => "What the Dog Saw",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "20 Oktober 2009",
        "Dimensi" => "432 halaman",
        "ISBN" => "9781600249150",
        "gambar" => "e.png"
    ],
    [
        "Judul" => "David and Goliath",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "1 Oktober 2013",
        "Dimensi" => "320 halaman",
        "ISBN" => "9781478980445",
        "gambar" => "g.png"
    ],
    [
        "Judul" => "Sebuah Seni Untuk Bersikap Bodo Amat",
        "Pengarang" => "Mark Manson",
        "Terbit" => "13 September 2016",
        "Dimensi" => "224 halaman",
        "ISBN" => "9781441711366",
        "gambar" => "f.png"
    ],
    [
        "Judul" => "Sang Pemimpi",
        "Pengarang" => "Andrea Hirata",
        "Terbit" => "Juli 2006",
        "Dimensi" => "292 halaman",
        "ISBN" => "9783446249691",
        "gambar" => "h.png"
    ],
    [
        "Judul" => "Laskar Pelangi",
        "Pengarang" => "Andrea Hirata",
        "Terbit" => "2005",
        "Dimensi" => "529 halaman",
        "ISBN" => "9780374246310",
        "gambar" => "i.png"
    ],
    [
        "Judul" => "Lontara Rindu",
        "Pengarang" => "S. Gegge Mappangewa",
        "Terbit" => "2012",
        "Dimensi" => "342 halaman",
        "ISBN" => "9786027595019",
        "gambar" => "j.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        html, body {
            display: flex;
            flex-direction: row;
            text-align: center;
        }
        li {
            list-style: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px; 
        }
        img {
            width: 100px;
            height: 100px;
        }
        h1 {
            margin-bottom: 100px;
            padding: 50px;
            border-right: 2px solid black;
        }
    </style>
</head>

<body>
<h1>Best Seller Books</h1>
    <?php foreach ( $books as $book ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $book["gambar"]; ?>">
                </li>
                <li>Judul : <?= $book["Judul"]; ?></li>
                <li>Pengarang : <?= $book["Pengarang"]; ?></li>  
                <li>Terbit : <?= $book["Terbit"]; ?></li>
                <li>Dimensi : <?= $book["Dimensi"]; ?></li>
                <li>ISBN : <?= $book["ISBN"]; ?></li>
            </ul>
<?php endforeach; ?>

</body>
</html>