<<<<<<< HEAD
<?php
/*
    Fresabayu Anggoro
    203040137
    Pertemuan ke - 6
    Array Associative
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            hight: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            transition: 1s;
        }
        .clear { clear: both;}
    </style>
</head>
<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach ( $angka as $a ) : ?>
    <?php foreach ( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>    
    <div class="clear"></div>
<?php endforeach; ?>

    
</body>
=======
<?php
/*
    Fresabayu Anggoro
    203040137
    Pertemuan ke - 6
    Array Associative
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            hight: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            transition: 1s;
        }
        .clear { clear: both;}
    </style>
</head>
<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach ( $angka as $a ) : ?>
    <?php foreach ( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>    
    <div class="clear"></div>
<?php endforeach; ?>

    
</body>
>>>>>>> 00459d08372ca6203f3091a76dc9bdc279e2ff98
</html>