<<<<<<< HEAD
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 12 Februari 2021
    latihan 3e Praktikum PW
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
    <title>Latihan 3E Praktikum PW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td>
      <figure class="image is=300x300">
        <img src="gambar/<?= $book["gambar"]; ?>" alt="">
      </figure>
      </td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["ISBN"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
=======
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 12 Februari 2021
    latihan 3e Praktikum PW
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
    <title>Latihan 3E Praktikum PW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td>
      <figure class="image is=300x300">
        <img src="gambar/<?= $book["gambar"]; ?>" alt="">
      </figure>
      </td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["ISBN"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
>>>>>>> 00459d08372ca6203f3091a76dc9bdc279e2ff98
</html>