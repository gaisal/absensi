<?php
session_start();

// Fungsi untuk mengarahkan pengguna ke halaman dashboard jika sudah login
function redirect_if_logged_in() {
    if (isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
        exit();
    }
}

// Panggil fungsi redirect_if_logged_in untuk memeriksa apakah pengguna sudah login
redirect_if_logged_in();

// Koneksi ke database (gantilah dengan konfigurasi koneksi sesuai dengan database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "absen_sidik_jari";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fungsi untuk memeriksa apakah email sudah terdaftar
function is_email_registered($conn, $email) {
    $stmt = $conn->prepare("SELECT id FROM login WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows > 0;
}

// Fungsi untuk menyimpan pesan error dalam session
function set_error_message($message) {
    $_SESSION['error_message'] = $message;
}

// Fungsi untuk menampilkan pesan error (jika ada) dan menghapusnya dari session
function show_error_message() {
    if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']);
    }
}

// Proses create account
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Periksa apakah email sudah terdaftar
    if (is_email_registered($conn, $email)) {
        set_error_message("Email already registered. Please use a different email.");
    } else {
        // Simpan data pengguna ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO login (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);
        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Account created successfully. You can now login.";
            header("Location: login.php");
            exit();
        } else {
            set_error_message("Failed to create account. Please try again.");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Account</title>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                            </div>
                            <?php show_error_message(); ?>
                            <form class="user" method="post" action="register.php">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
