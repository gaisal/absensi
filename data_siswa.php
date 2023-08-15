<?php
include 'header.php';

require 'config.php';


// Query untuk mengambil data siswa berdasarkan jurusan dan kelas
$query_ipa_kelas_10 = mysqli_query($conn, "SELECT * FROM users WHERE jurusan = 'ipa' AND kelas = '10'");
$query_ipa_kelas_11 = mysqli_query($conn, "SELECT * FROM users WHERE jurusan = 'ipa' AND kelas = '11'");
$query_ipa_kelas_12 = mysqli_query($conn, "SELECT * FROM users  WHERE jurusan = 'ipa' AND kelas = '12'");

$query_ips_kelas_10 = mysqli_query($conn, "SELECT * FROM users WHERE jurusan = 'ips' AND kelas = '10'");
$query_ips_kelas_11 = mysqli_query($conn, "SELECT * FROM users  WHERE jurusan = 'ips' AND kelas = '11'");
$query_ips_kelas_12 = mysqli_query($conn, "SELECT * FROM users  WHERE jurusan = 'ips' AND kelas = '12'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Absensi Fingerprint</title>

      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- ... (kode topbar tetap sama) ... -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>

                <!-- Data IPA Kelas 10 -->
<h3 class="mb-4 text-gray-800">Jurusan IPA - Kelas 10</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_10)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Data IPA Kelas 11 -->
<h3 class="mb-4 text-gray-800">Jurusan IPA - Kelas 11</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_11)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Data IPA Kelas 12 -->
<h3 class="mb-4 text-gray-800">Jurusan IPA - Kelas 12</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_12)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ... (HTML code) ... -->

<!-- Data IPS Kelas 10 -->
<h3 class="mb-4 text-gray-800">Jurusan IPS - Kelas 10</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ips_kelas_10)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... (HTML code) ... -->

<!-- Data IPS Kelas 11 -->
<h3 class="mb-4 text-gray-800">Jurusan IPS - Kelas 11</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable5" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ips_kelas_11)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... (HTML code) ... -->

<!-- Data IPS Kelas 12 -->
<h3 class="mb-4 text-gray-800">Jurusan IPS - Kelas 12</h3>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- ... (kode card header tetap sama) ... -->
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable6" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query_ips_kelas_12)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['serialnumber'] . "</td>";
                                echo "<td>" . $row['kelas'] . "</td>";
                                echo "<td>" . $row['jurusan'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>";
                                // Tambahkan link untuk mengedit dan menghapus data
                                echo "<a href='update_data.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... (HTML code) ... -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
// Tutup koneksi database
mysqli_close($conn);
?>