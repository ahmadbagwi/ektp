<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "ektp";

// $koneksi = mysqli_connect($host, $user, $password, $database) or die("Koneksi ke Database MySQL gagal ".mysqli_connect_error());
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	echo "Koneksi ke database error";
}
?>