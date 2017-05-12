<?php
//mengambil variabel cookie
$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];

//menghilangkan cookies yang telah didaftar
setcookie("user", "", time()-3600);
setcookie("pass", "", time()-3600);
header("location:index.php");//setelah cookies dihapus maka file login.php akan dipanggil
 
 ?>