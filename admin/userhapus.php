<?php
include('../header.php');

$id = $_GET['id']; //variabel id diambil dari noktp pada halaman tampildata

$sql = "DELETE FROM akun WHERE id = $id"; //sql untuk mengambil data dengan id/noktp yang sesuai
$result = $conn->query($sql);
if ($result) {
	echo "<script>alert('Akun telah berhasil dihapus');document.location='http://localhost/ektp/admin/user.php';</script>";
	}else{
	echo "Data gagal dihapus".$sql."<br>".$conn->error;
}
?>
