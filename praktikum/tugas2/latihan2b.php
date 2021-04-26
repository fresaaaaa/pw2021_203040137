<<<<<<< HEAD
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 05 Februari 2021
    latihan 2B Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B Praktikum PW</title>

    <style>
        .kotak {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php

    $jawabanIsset = "Isset adalah = Berfungsi untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class="kotak">
        <?= soal("  "); ?>
    </div>

</body>

=======
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 05 Februari 2021
    latihan 2B Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B Praktikum PW</title>

    <style>
        .kotak {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php

    $jawabanIsset = "Isset adalah = Berfungsi untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class="kotak">
        <?= soal("  "); ?>
    </div>

</body>

>>>>>>> 00459d08372ca6203f3091a76dc9bdc279e2ff98
</html>