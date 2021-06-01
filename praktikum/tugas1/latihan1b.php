<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 26 Februari 2021
    latihan 1B Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1B Praktikum PW</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php
        $i = 1;
        $j = 1;
        ?>

        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <tr>
                <th>Baris <?= $j; ?></th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <td><?= "Baris $j, Kolom $i" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>

</body>
<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 26 Februari 2021
    latihan 1B Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1B Praktikum PW</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php
        $i = 1;
        $j = 1;
        ?>

        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <tr>
                <th>Baris <?= $j; ?></th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <td><?= "Baris $j, Kolom $i" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>

</body>

</html>