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

// Periksa apakah data "nama", "nim", "gender", "kelas", dan "jurusan" telah dikirim melalui permintaan
if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['gender']) && isset($_POST['kelas']) && isset($_POST['jurusan'])) {
    // Tangkap nilai "nama", "nim", "gender", "kelas", dan "jurusan" dari permintaan
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk menambahkan data ke tabel siswa
    $sql = "INSERT INTO siswa (nama, nim, gender, kelas, jurusan, fingerprint_id, fingerprint_select, user_date, time_in, del_fingerid, add_fingerid) VALUES ('$nama', '$nim', '$gender', '$kelas', '$jurusan', 0, 0, '0000-00-00', '00:00:00', 0, 0)";

    if (mysqli_query($conn, $sql)) {
        // Data berhasil ditambahkan, arahkan kembali ke halaman utama setelah 2 detik
        header("refresh:2; url=header.php");
        echo "Data berhasil ditambahkan. Akan kembali ke halaman utama dalam 2 detik...";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak lengkap";
}

// Tutup koneksi database
mysqli_close($conn);
?>
