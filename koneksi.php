<?php
// Konfigurasi database
$host = "localhost";
$username = "root";  
$password = "";      
$database = "seminar_workshop";
// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
