<?php 
include('../db.php');

	$noktp = $_POST['noktp'];
	$nama = $_POST['nama'];
	$tempatLahir = $_POST['tempatLahir'];
	$tanggalLahir = $_POST['tanggalLahir'];
	$jenisKelamin = $_POST['jenisKelamin'];
	$golDarah = $_POST['golDarah'];
	$status = $_POST['status'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$warganegara = $_POST['warganegara'];
	$alamat = $_POST['alamat'];
	$rtrw = $_POST['rtrw'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$provinsi = $_POST['provinsi'];
	$tanggalDaftar = $_POST['tanggalDaftar'];
	//Upload Foto
	$file_name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$fp = fopen($tmp_name, 'r');
	$file_content = fread($fp, $file_size);
	$file_content = mysqli_real_escape_string($conn, $file_content);
	fclose($fp);


$sqlupdate = "UPDATE data SET nama = '$nama', tempatLahir = '$tempatLahir', tanggalLahir = '$tanggalLahir', jenisKelamin = '$jenisKelamin', golDarah = '$golDarah', status = '$status', agama = '$agama', pekerjaan = '$pekerjaan', warganegara = '$warganegara', alamat = '$alamat', rtrw = '$rtrw', kecamatan = '$kecamatan', kota = '$kota', provinsi = '$provinsi', tanggalDaftar = '$tanggalDaftar', foto = '$file_content' WHERE noktp = '$noktp'";
	if ($conn->query($sqlupdate)) {
	echo "<script>alert('Data telah berhasil disimpan');document.location='http://localhost/ektp/admin/tampildata.php';</script>";
	}else{
	echo "Data gagal disimpan".$sql."<br>".$conn->error;
	}

?>