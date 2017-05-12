<?php
include('../db.php');

$id = $_GET['id']; //variabel id diambil dari noktp pada halaman tampildata

$sql = "DELETE FROM data WHERE noktp = $id"; //sql untuk mengambil data dengan id/noktp yang sesuai
$result = $conn->query($sql);
if ($result) {
	echo "<script>alert('Data telah berhasil dihapus');document.location='http://localhost/ektp/admin/hapusdata.php';</script>";
	}else{
	echo "Data gagal dihapus".$sql."<br>".$conn->error;
}
?>
