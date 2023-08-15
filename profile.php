<?php
include "header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- ... Topbar content ... -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                            <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800">Profile Page</h1>

                        <!-- Profile Content -->
                        <div class="container">
                            <h1>Profile Page</h1>
                            <!-- Include your code to display user profile information here -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">User Profile</h5>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Nomor telepon</label>
                                        <input type="text" class="form-control" id="telepon" value="<?php echo isset($_SESSION['telepon']) ? $_SESSION['telepon'] : ''; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" readonly>
                                    </div>
                                    <!-- Add more profile fields here -->
                                </div>
                            </div>
                        </div>

                        </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- ... Footer and JavaScript imports ... -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- ... JavaScript imports ... -->

</body>

</html>
