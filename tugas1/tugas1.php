<?php
/*
    Fresabayu Anggoro
    203040137
    Jumat 13.00, 26 Februari 2021
    Tugas 1 Praktikum PW
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Praktikum PW</title>
</head>

<body>

    <table border="1" cellpadding="25" cellspacing="10">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 6; $j++) : ?>
                    <?php if (($i + $j) % 2 == 1) { ?>
                        <td bgcolor="salmon"></td>
                    <?php } else if (($i + $j) % 2 == 0) { ?>
                        <td bgcolor="lightblue"></td>
                    <?php } ?>
                <?php endfor; ?>
            <tr>
            <?php endfor; ?>
    </table>
</body>

</html>