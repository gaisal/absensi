<?php

require 'config.php';
include 'header.php';


// Include file config.php atau file yang berisi fungsi dan koneksi ke database
require 'config.php';

// Cek apakah tombol logout telah ditekan
if (isset($_GET['logout'])) {
    // Hapus semua data session
    session_unset();
    session_destroy();

    // Redirect ke halaman login setelah logout
    header("Location: login.php");
    exit();
}

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

    <script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/manage_users.js"></script>
<script>
  $(document).ready(function(){
  	  $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    setInterval(function(){
      $.ajax({
        url: "manage_users_up.php"
        }).done(function(data) {
        $('#manage_users').html(data);
      });
    },5000);
  });
</script>
</head>
<body id="page-top">
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <!-- Content Row -->
                <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                    <div class="card-header bg-gradient-primary text-white">TAMBAH DATA SISWA</div>
                    <div class="row">

                <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <div class="alert" style="height: 5px;">
                    <label id="alert"></label>
                    </div>
                <form>
                    <fieldset>
                    <legend><span class="number">1</span> User Fingerprint ID:</legend>
                        <label>Enter Fingerprint ID between 1 & 127:</label>
                        <input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
                        <button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
                    </fieldset>
                    <fieldset>
                        <legend><span class="number">2</span> User Info</legend>
                        <input type="text" name="name" id="name" placeholder="User Name...">
                        <input type="text" name="number" id="number" placeholder="Serial Number...">
                        <input type="email" name="email" id="email" placeholder="User Email...">
                        <input type="text" name="kelas" id="kelas" placeholder="kelas...">
                        <input type="text" name="jurusan" id="jurusan" placeholder="User jurusan...">
                    </fieldset>
                    <fieldset>
                    <legend><span class="number">3</span> Additional Info</legend>
                    <label>
                        Time In:
                        <input type="time" name="timein" id="timein">
                        <input type="radio" name="gender" class="gender" value="Female">Female
                        <input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
                    </label >
                    </fieldset>
                    <button type="button" name="user_add" class="user_add">Add User</button>
                    <button type="button" name="user_upd" class="user_upd">Update User</button>
                    <button type="button" name="user_rmo" class="user_rmo">Remove User</button>
                </form>
                </div>
                </div>
                </div>

                        <div class="col-sm-8">
                            <div class="card">
                            <div class="card-body">
                            <div class="section">
                            <!--User table-->
                                <table class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                        <th>Finger .ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Time in</th>
                                        </tr>
                                    </thead>
                                    </table>
                                    <div id="manage_users">
                                    </div>
                                    
                            </div>
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


</body>

</html>
