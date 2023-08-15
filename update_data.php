<!-- update_data.php -->
<?php
include 'header.php';

require 'config.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get data from the form
    $id = $_POST['id'];
    $username = $_POST['username'];
    $serialnumber = $_POST['serialnumber'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Update data in the database
    $sql = "UPDATE users SET username=?, serialnumber=?, gender=?, kelas=?, jurusan=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssi", $username, $serialnumber, $gender, $kelas, $jurusan, $id);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect back to data_siswa.php with a success message
        header("Location: data_siswa.php?status=success");
        exit();
    } else {
        // Redirect back to data_siswa.php with an error message
        header("Location: data_siswa.php?status=error");
        exit();
    }
}

// Check if an ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to get the student data
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
} else {
    // If no ID is provided, redirect back to data_siswa.php
    header("Location: data_siswa.php");
    exit();
}
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
        <!-- Topbar -->
        <!-- ... Add your topbar code here ... -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Update Data Siswa</h1>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Update Data Siswa</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <form action="update_data.php" method="POST">
                                <div class="form-group">
                                    <label for="id">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="username">NAMA</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="serialnumber">NIM</label>
                                    <input type="text" class="form-control" id="serialnumber" name="serialnumber" value="<?php echo $row['serialnumber']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['gender']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <!-- ... Add your footer code here ... -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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

</body>

</html>
