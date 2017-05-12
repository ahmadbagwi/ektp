<?php
include('../db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM data WHERE noktp=$id";
$result = $conn->query($sql);
$row = $result->fetch_array();

$noktp = $row['noktp'];
$nama = $row['nama'];
$tempatLahir = $row['tempatLahir'];
$tanggalLahir = $row['tanggalLahir'];
$jenisKelamin = $row['jenisKelamin'];
$golDarah = $row['golDarah'];
$alamat = $row['alamat'];
$rtrw = $row['rtrw'];
$kecamatan = $row['kecamatan'];
$agama = $row['agama'];
$status = $row['status'];
$pekerjaan = $row['pekerjaan'];
$warganegara = $row['warganegara'];
$provinsi = $row['provinsi'];
$foto = $row['foto'];
$savefilefoto = file_put_contents("../img/{$noktp}.jpeg", $foto);
$getfilefoto = imagecreatefromjpeg("../img/$noktp.jpeg");

$im = imagecreatefromjpeg('../img/ektp.jpeg');
$black = imagecolorallocate($im, 0, 0, 0);
$font = "../fonts/Ubuntu-R.ttf";

imagettftext($im, 24, 0, 240, 30, $black, $font, "Provinsi $provinsi");
imagettftext($im, 18, 0, 60, 39, $black, $font, $noktp);
imagettftext($im, 15, 0, 200, 71, $black, $font, $nama);
imagettftext($im, 15, 0, 200, 107, $black, $font, $tempatLahir);
imagettftext($im, 15, 0, 290, 107, $black, $font, $tanggalLahir);
imagettftext($im, 15, 0, 200, 143, $black, $font, $jenisKelamin);
imagettftext($im, 15, 0, 200, 175, $black, $font, $golDarah);
imagettftext($im, 15, 0, 200, 213, $black, $font, $alamat);
imagettftext($im, 15, 0, 200, 245, $black, $font, $rtrw);
imagettftext($im, 15, 0, 200, 280, $black, $font, $kecamatan);
imagettftext($im, 15, 0, 200, 313, $black, $font, $agama);
imagettftext($im, 15, 0, 200, 348, $black, $font, $status);
imagettftext($im, 15, 0, 200, 387, $black, $font, $pekerjaan);
imagettftext($im, 15, 0, 200, 420, $black, $font, $warganegara);

list($width_src_file_foto, $height_src_file_foto) = getimagesize("../img/$noktp.jpeg");

imagecopyresized($im, $getfilefoto, 450, 250, 0, 0, 150,150, $width_src_file_foto, $height_src_file_foto);

header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
imagedestroy($foto3)
?>
