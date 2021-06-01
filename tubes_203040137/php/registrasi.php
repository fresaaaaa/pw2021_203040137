<?php
/*
    Fresabayu Anggoro
    203040137
    Kelas D Informatika
    Tugas Besar Banget
    https://github.com/fresaaaaa/pw2021_203040137
*/


require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "
			<script>
				alert('Registrasi Berhasil');
        document.location.href = 'login.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Registrasi Gagal');
			</script>
		";
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
  <link rel="stylesheet" href="../css/regis.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Daftar Akun</title>
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="row contentForm">
        <div class="col-sm-12 col-md-6 col lg-6">
          <img data-aos="fade-in" data-aos-duration="1500" data-aos-easing="ease-in-out" src="../assets/gambar/login1.png" alt="" class="img-fluid">
        </div>

        <div class="col-sm-12 col-md-6 col lg-6">
          <h3 class="text-center mb-5">Daftar Now</h3>
          <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
          <?php endif; ?>
          <form action="" method="POST" class="mt-3">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <label for="password1" class="form-label">Ketik ulang Password</label>
              <input type="password" class="form-control" name="password1" placeholder="Confirm Password" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary w-50">Daftar</button>
            <a href="login.php" class="btn btn-primary w-50" style="float: right; display:block;">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>



  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>