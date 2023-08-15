<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absen";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi database
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ambil data dari permintaan
$fingerprint_id = $_POST['fingerprint_id'];

// Simpan data ke dalam tabel absensi
$sql = "INSERT INTO absensi (fingerprint_id) VALUES ('$fingerprint_id')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
?>
