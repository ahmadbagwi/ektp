<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ektp";

// $koneksi = mysqli_connect($host, $user, $password, $db) or die("Koneksi ke Database MySQL gagal ".mysqli_connect_error());
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
	echo "Koneksi ke database error";
}
?>
