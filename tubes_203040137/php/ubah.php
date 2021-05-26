<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
// ambil data di URL
$id = $_GET["id"];

// query data buku berdasarkan id
$anim = query("SELECT * FROM anime WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
				alert('Data Berhasil Diubah!');
				document.location.href = 'admin.php';
			</script>";
    } else {
        echo "<script>
				alert('Data Gagal Diubah!');
				document.location.href = 'admin.php';
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tambah.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>WBNime</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="row contentForm">
                <div class="col-sm-12 col-md-6 col lg-6">
                    <img data-aos="fade-in" data-aos-duration="1500" data-aos-easing="ease-in-out" src="../assets/gambar/login1.png" alt="" class="img-fluid">
                </div>

                <div class="col-sm-12 col-md-6 col lg-6">
                    <h3 class="text-center mb-5">Form ubah data Anime</h3>

                    <form action="" method="POST" class="mt-3" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $anim['id']; ?>">
                        <div class="mb-1">
                            <input type="hidden" name="gambar_lama" value="<?= $anim['gambar']; ?>">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()">
                            <img src="../assets/gambar/<?= $anim['gambar']; ?>" style="display:block;" class="img-preview" width="100">
                        </div>
                        <div class="mb-1">
                            <label for="Judul" class="form-label">Judul :</label>
                            <input type="text" name="Judul" id="Judul" class="form-control" value="<?= $anim['Judul']; ?>" required autocomplete="off" autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="Genre" class="form-label">Genre :</label>
                            <input type="text" name="Genre" id="Genre" class="form-control" value="<?= $anim['Genre']; ?>" required autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="Status" class="form-label">Status :</label>
                            <input type="text" name="Status" id="Status" class="form-control" value="<?= $anim['Status']; ?>" required autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="Studio" class="form-label">Studio :</label>
                            <input type="text" name="Studio" id="Studio" class="form-control" value="<?= $anim['Studio']; ?>" required autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="Source" class="form-label">Source :</label>
                            <input type="text" name="Source" id="Source" class="form-control" value="<?= $anim['Source']; ?>" required autocomplete="off">
                        </div>
                        <br>
                        <button type="submit" name="ubah" class="btn btn-primary w-50">Ubah Data</button>
                        <a href="admin.php" class="btn btn-primary w-50" style="float: right; display:block;">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <script src="../js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>