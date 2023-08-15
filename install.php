<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absen";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the 'absen' database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS `absen`";
if (mysqli_query($conn, $sql_create_db)) {
    echo "Database 'absen' created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the 'absen' database
mysqli_select_db($conn, $dbname);

// SQL statement to create the 'user_siswa' table
$sql_create_table_user_siswa = "
CREATE TABLE IF NOT EXISTS `user_siswa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NOT NULL,
  `nim` DOUBLE NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `kelas` VARCHAR(10) NOT NULL,
  `jurusan` VARCHAR(50) NOT NULL,
  `fingerprint_id` INT(11) NOT NULL,
  `fingerprint_select` TINYINT(1) NOT NULL DEFAULT 0,
  `user_date` DATE NOT NULL,
  `time_in` TIME NOT NULL,
  `del_fingerid` TINYINT(1) NOT NULL DEFAULT 0,
  `add_fingerid` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

// Execute the SQL statement to create the 'user_siswa' table
if (mysqli_query($conn, $sql_create_table_user_siswa)) {
    echo "Table 'user_siswa' created successfully.<br>";
} else {
    echo "Error creating table 'user_siswa': " . mysqli_error($conn) . "<br>";
}

// SQL statement to create the 'userlog_absensi' table
$sql_create_table_userlog_absensi = "
CREATE TABLE IF NOT EXISTS `userlog_absensi` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NOT NULL,
  `nim` INT(11) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `fingerprint_id` INT(5) NOT NULL,
  `checkindate` DATE NOT NULL,
  `timein` TIME NOT NULL,
  `timeout` TIME NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nim` (`nim`),
  CONSTRAINT `userlog_absensi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user_siswa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci";

// Execute the SQL statement to create the 'userlog_absensi' table
if (mysqli_query($conn, $sql_create_table_userlog_absensi)) {
    echo "Table 'userlog_absensi' created successfully.<br>";
} else {
    echo "Error creating table 'userlog_absensi': " . mysqli_error($conn) . "<br>";
}

// Close the database connection
mysqli_close($conn);
?>
