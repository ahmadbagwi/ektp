<?php
ini_set('display_errors', 1);
$noktp = 1244;
$im = imagecreatefromjpeg('../img/ektp.jpeg');
$foto3 = imagecreatefromjpeg("../img/$noktp.jpeg");
imagecopy($im, $foto3, 500, 250, 0, 0, 150, 150);
//'<img src="data:image/jpg;base64,' . base64_encode( $row['foto'] ) . '" height="80px" width="80px" />'
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
imagedestroy($foto3);
?>
