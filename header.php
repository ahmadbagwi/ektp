<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include($_SERVER['DOCUMENT_ROOT'].'/php/ektp/db.php');
$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];
ini_set('display_errors', 1);
if (!isset($user)) {
	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu ya');document.location='../';</script>";
}
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pendaftaran E-KTP - <?php echo $_SERVER['PHP_SELF']; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
