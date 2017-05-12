<?php
include("db.php");
//ambil variabel dari form
$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);
//Cek kondisi form
if ($username == "") {
	echo "<script>alert('Username atau password tidak boleh kosong');document.location='javascript:history.back(0);'</script>";
}
else { //Jika variabel username dan password terisi eksekusi kode berikut
	$sql = "SELECT user, pass FROM akun WHERE (user = '$username') AND (pass = '$password')"; //cek apakah input user sesuai dengan db
	$result = $conn->query($sql);
	if ($result->num_rows >0) {
		$row = $result->fetch_assoc();
	}
	// $row = mysql_fetch_array($sql); //ekstrak data array
	// $e = mysql_num_rows($sql);
	if ($row['user'] == $username and $row['pass'] == $password) {
		$usernamecookie = $row['user']; //variabel untuk ditambahkan ke cookie
		$passwordcookie = $row['pass'];

		setcookie("user", $usernamecookie, time()+3600);
		setcookie("pass", $passwordcookie, time()+3600); {
			header("location: admin/index.php"); //alihkan ke halaman dashboard jika berhasil login
		}
	}
	else {
		echo "<script>alert('Login gagal user atau password salah');document.location='index.php';</script>";
	}
}
?>
