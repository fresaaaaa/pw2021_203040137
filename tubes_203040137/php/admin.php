<?php
/*
    Fresabayu Anggoro
    203040137
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}


//Menghubungkan dengan file phplainnya
require 'function.php';

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $anim = query("SELECT * FROM anime
          WHERE
    Judul LIKE '%$keyword%' OR
    Genre LIKE '%$keyword%' OR
    Status LIKE '%$keyword%' OR
    Studio LIKE '%$keyword%' OR
    Source LIKE '%$keyword%' 
    ");
} else {
    $anim = query("SELECT * FROM anime");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBNime</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/admin.css">

    <style>
        body {
            background-color: rgb(0, 0, 80);
            padding: 50px 20px;

        }

        .form {
            border-color: salmon;
            border-style: solid;
            border-width: 0 0 1px 0;
        }

        .container {
            background-image: linear-gradient(red, white);
            padding: 10px;

        }

        .kotak {
            border: 1px solid #cecece;
            border-radius: 3px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            color: white;
            background-color: red;
            border-radius: 10px;
        }

        .kotak:hover {
            border: 1px solid #b1b1b1;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        /* table {
            background-image: linear-gradient(red, yellow, skyblue);
        } */
    </style>
</head>

<body>

    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-primary bg-light" style="background: transparent;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WBNime.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                <div class="add">
                    <form action="" method="get" style="float: right;" class="d-flex">
                        <input class="form-control me-2" type="text" name="
                        keyword" placeholder="Search" aria-label="Search" autocomplete="off" autofocus>
                        <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav> -->

    <section>
        <div class="container">
            <br>
            <a href="logout.php"><button class="btn btn-danger w-10" style="float: right; display:block; padding:5px;">Logout</button></a>

            <a href="tambah.php"><button class="btn btn-warning w-10" style="float: right; display:block; padding:5px;">Tambah Data</button></a>

            <h1 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">WBNime.</h1>
            <br>
            <div class="add">
                <form action="" method="get" style="float: left;" class="form">
                    <input type="text" name="keyword" size="30" placeholder="Cari Di sini!" autocomplete="off" autofocus class="keyword">
                    <button type="submit" name="cari" class="tombol-cari btn btn-primary w-10">Cari!</button>
                </form>
            </div>
            <br><br>
            <table border="1" cellpadding="15" cellspacing="0">
                <tr>
                    <th>#</th>
                    <th>Opsi</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Status</th>
                    <th>Studio</th>
                    <th>Source</th>
                </tr>

                <?php if (empty($anim)) : ?>
                    <tr>
                        <td colspan="9">
                            <h1>Data tidak ditemukan</h1>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1 ?>
                    <?php foreach ($anim as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row['id']; ?>"><button class="btn btn-info w-10">Ubah</button></a> <br>
                                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="btn btn-danger w-10">Hapus</button></a>
                            </td>
                            <td><img src="../assets/gambar/<?= $row["gambar"]; ?>" alt=""></td>
                            <td><?= $row["Judul"] ?></td>
                            <td><?= $row["Genre"] ?></td>
                            <td><?= $row["Status"] ?></td>
                            <td><?= $row["Studio"] ?></td>
                            <td><?= $row["Source"] ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </section>



    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>