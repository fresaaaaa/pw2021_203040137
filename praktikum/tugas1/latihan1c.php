<<<<<<< HEAD
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 26 Februari 2021
    latihan 1C Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1C Praktikum PW</title>

    <style>
        .circle {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="circle"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>

=======
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 26 Februari 2021
    latihan 1C Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1C Praktikum PW</title>

    <style>
        .circle {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="circle"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>

>>>>>>> 00459d08372ca6203f3091a76dc9bdc279e2ff98
</html>