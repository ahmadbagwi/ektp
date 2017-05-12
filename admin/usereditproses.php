<?php
include('../db.php');
//mengambil variabel cookie
$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];

if (!isset($user)) {
	echo "<script>alert('Anda belum login, harus login terlebih dahulu');document.location='http://localhost/ektp/index.php';</script>";
}

$id = $_POST['iduser'];
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);

$sqlupdate = "UPDATE akun SET user = '$user', email = '$email', pass = '$password' WHERE id = $id";

if ($conn->query($sqlupdate)) {
echo "<script>alert('Akun telah berhasil diupdate');document.location='http://localhost/ektp/admin/user.php';</script>";
}else{
echo "Update akun gagal disimpan".$sqlupdate."<br>".$conn->error;
}
?>
