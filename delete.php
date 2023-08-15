<?php
require 'config.php';

// Periksa apakah parameter id telah diberikan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data siswa berdasarkan id
    $sql = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // Redirect kembali ke halaman sebelumnya setelah berhasil menghapus data
        header("Location: data_siswa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi database
if ($conn) {
    mysqli_close($conn);
}
