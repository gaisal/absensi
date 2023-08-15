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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk memperbarui data siswa berdasarkan id
    $sql = "UPDATE user_siswa SET nama='$nama', nim='$nim', kelas='$kelas', jurusan='$jurusan' WHERE siswa_id=$id";

    if (mysqli_query($conn, $sql)) {
        // Redirect kembali ke halaman data_siswa.php setelah berhasil memperbarui data
        header("Location: data_siswa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>
