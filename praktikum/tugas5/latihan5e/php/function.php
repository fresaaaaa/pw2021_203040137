<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, 'pw_203040137');

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}  

// fungsi untuk menambahkan data di dalam database
function tambah($book) {
    $conn = koneksi();

    $img = htmlspecialchars($book['gambar']);
    $Judul = htmlspecialchars($book['Judul']);
    $Pengarang = htmlspecialchars($book['Pengarang']);
    $Terbit = htmlspecialchars($book['Terbit']);
    $Dimensi = htmlspecialchars($book['Dimensi']);
    $ISBN = htmlspecialchars($book['ISBN']);

    $query = "INSERT INTO buku
                VALUES
             ('', '$img', '$Judul', '$Pengarang', '$Terbit', '$Dimensi', '$ISBN')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data di dalam database
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($book) {
    $conn = koneksi();

    $id = htmlspecialchars($book["id"]);
    $gambar = htmlspecialchars($book["gambar"]);
    $Judul = htmlspecialchars($book["Judul"]);
    $Pengarang = htmlspecialchars($book["Pengarang"]);
    $Terbit = htmlspecialchars($book["Terbit"]);
    $Dimensi = htmlspecialchars($book["Dimensi"]);
    $ISBN = htmlspecialchars($book["ISBN"]);

    $query = "UPDATE buku SET
				gambar = '$gambar',
				Judul = '$Judul',
				Pengarang = '$Pengarang',
                Terbit = '$Terbit',
				Dimensi = '$Dimensi',
				ISBN = '$ISBN'
			  WHERE id = '$id'
			";

    mysqli_query($conn, $query);   

    return mysqli_affected_rows($conn);
}
