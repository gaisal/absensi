<?php

require 'config.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>data absensi siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- LINK CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>

<body class="bg-gradient-primary">

    

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <!-- Content Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                        <div class="card-header bg-gradient-primary text-white">DATA ABSENSI</div>
                            <!-- Card Body -->
                            <form action="data_absensi.php" method="get" class="ml-3 mt-3">
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label class="col-form-label">Periode</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="date" class="form-control" name="dari" required>
                                    </div>
                                    <div class="col-auto">
                                        -
                                    </div>
                                    <div class="col-auto">
                                        <input type="date" class="form-control" name="ke" required>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>

                            <?php 

                    //jika tanggal dari dan tanggal ke ada maka
                    if(isset($_GET['dari']) && isset($_GET['ke'])){
                    // tampilkan data yang sesuai dengan range tanggal yang dicari 

                    $query_ipa_kelas_10 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ipa' AND users.kelas = '10' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    $query_ipa_kelas_11 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ipa' AND users.kelas = '11' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    $query_ipa_kelas_12 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ipa' AND users.kelas = '12' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    $query_ips_kelas_10 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ips' AND users.kelas = '10' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    $query_ips_kelas_11 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ips' AND users.kelas = '11' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    $query_ips_kelas_12 = mysqli_query($conn, "SELECT * 
                    FROM users_logs 
                    LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                    WHERE users.jurusan = 'ips' AND users.kelas = '12' AND users_logs.checkindate BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");

                    }else{
                    //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                  
                      $query_ipa_kelas_10 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ipa' AND users.kelas = '10'");
  
                      $query_ipa_kelas_11 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ipa' AND users.kelas = '11'");
  
                      $query_ipa_kelas_12 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ipa' AND users.kelas = '12'");
  
                      $query_ips_kelas_10 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ips' AND users.kelas = '10'");
  
                      $query_ips_kelas_11 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ips' AND users.kelas = '11'");
  
                      $query_ips_kelas_12 = mysqli_query($conn, "SELECT * 
                      FROM users_logs 
                      LEFT JOIN users ON users_logs.fingerprint_id = users.fingerprint_id
                      WHERE users.jurusan = 'ips' AND users.kelas = '12'");
                    }

                    ?>



                <!-- Data IPA Kelas 10 -->
                <div class="row mt-4">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPA - Kelas 10</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_10)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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
                    <div class="row">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->  
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPA - Kelas 11</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_11)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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
                    <div class="row">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPA - Kelas 12</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example3" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_12)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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

                                <!-- Data IPS Kelas 10 -->
                                <div class="row">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPS - Kelas 10</div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example4" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ips_kelas_10)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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

                                <!-- Data IPS Kelas 11 -->
                                <div class="row">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPS - Kelas 11</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example5" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ips_kelas_11)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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
                                <div class="row">
                    <div class="col mr-5 ml-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <!-- ... (kode card header tetap sama) ... -->
                            <!-- Card Body -->
                            <div class="card-header bg-gradient-secondary text-white">Jurusan IPS - Kelas 12</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example6" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Tanggal Absensi</th>
                                                <th>Waktu Masuk</th> 
                                                <th>Waktu Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($query_ipa_kelas_12)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['serialnumber'] . "</td>";
                                                echo "<td>" . $row['checkindate'] . "</td>";
                                                echo "<td>" . $row['timein'] . "</td>";
                                                echo "<td>" . $row['timeout'] . "</td>";
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

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="text-center">
                    <span>Footer Text</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


    <!-- java src -->
        <script>
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example3').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example4').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example5').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

    $(document).ready(function() {
        $('#example6').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
    </script>
</body>

</html>
