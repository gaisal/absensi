<?php
include 'header.php';
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

    // Query untuk menambahkan data ke tabel user_siswa
    $sql = "INSERT INTO user_siswa (nama, nim, gender, kelas, jurusan, fingerprint_id, fingerprint_select, user_date, time_in, del_fingerid, add_fingerid) VALUES ('$nama', '$nim', '$gender', '$kelas', '$jurusan', 0, 0, '0000-00-00', '00:00:00', 0, 0)";

    if (mysqli_query($conn, $sql)) {
        // Data berhasil ditambahkan, arahkan ke halaman data_siswa.php
        header("Location: data_siswa.php");
        exit(); // Pastikan script berhenti di sini setelah mengarahkan ke halaman baru
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Mahasiswa</h1>
                            </div>
                            <form class="user" action="add_data.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama"
                                        placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nim"
                                        placeholder="NIM" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="gender"
                                        placeholder="Gender" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kelas"
                                        placeholder="Kelas" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="jurusan"
                                        placeholder="Jurusan" required>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
