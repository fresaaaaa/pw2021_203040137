<?php
//fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_203040137");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];


    // ketika tidak ada gambar yang di pilih
    if ($error == 4) {
        //     echo "<script>
        //             alert('pilih gambar terlebih dahulu!');
        //         </script>";
        // } else {
        //     echo "data gagal di tambahkan!";
        return 'nophoto.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
    </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000 
    if ($ukuran_file > 500000) {
        echo "<script>
        alert('gambar yang anda pilih terlalu besar!');
    </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/gambar/' . $nama_file_baru);

    return $nama_file_baru;
}



// fungsi untuk menambahkan data di dalam database
function tambah($anim)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($anim['gambar']);
    $Judul = htmlspecialchars($anim['Judul']);
    $Genre = htmlspecialchars($anim['Genre']);
    $Status = htmlspecialchars($anim['Status']);
    $Studio = htmlspecialchars($anim['Studio']);
    $Source = htmlspecialchars($anim['Source']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // if ($gambar == 'nophoto.png') {
    //     $gambar = $gambar_lama;
    // }

    $query = "INSERT INTO anime
                VALUES
             ('', '$gambar', '$Judul', '$Genre', '$Status', '$Studio', '$Source')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data di dalam database



function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder gambar
    $anim = query("SELECT * FROM anime WHERE id = $id")[0];
    if ($anim['gambar'] != 'nophoto.png') {
        unlink('../assets/gambar/' . $anim['gambar']);
    }


    mysqli_query($conn, "DELETE FROM anime WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($anim)
{
    $conn = koneksi();

    $id = htmlspecialchars($anim["id"]);
    $gambar_lama = htmlspecialchars($anim["gambar_lama"]);
    $Judul = htmlspecialchars($anim["Judul"]);
    $Genre = htmlspecialchars($anim["Genre"]);
    $Status = htmlspecialchars($anim["Status"]);
    $Studio = htmlspecialchars($anim["Studio"]);
    $Source = htmlspecialchars($anim["Source"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.png') {
        $gambar = $gambar_lama;
    }


    $query = "UPDATE anime SET
				gambar = '$gambar',
				Judul = '$Judul',
				Genre = '$Genre',
                Status = '$Status',
				Studio = '$Studio',
				Source = '$Source'
			  WHERE id = '$id'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $conn = koneksi();

    $query = "SELECT * FROM anime
    WHERE 
    Judu; LIKE '%$keyword%' OR
    Genre LIKE '%$keyword%' OR
    Status LIKE '%$keyword%' OR
    Studio LIKE '%$keyword%' OR
    Source LIKE '%$keyword%'
    ";


    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username 
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
}

function registrasi($anim)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($anim["username"]));
    $password = mysqli_real_escape_string($conn, $anim["password"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah dipakai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
