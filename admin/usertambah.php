<?php
include('../header.php');
//mengambil variabel cookie
$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];

if (!isset($user)) {
	echo "<script>alert('Anda belum login, harus login terlebih dahulu');document.location='http://localhost/ektp/index.php';</script>";
}
?>

<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="konten">
				<div class="judul"><h2>Selamat datang <?php echo "$user"; ?> di halaman Dashboard Aplikasi E-KTP</h2></div>
				<button class="btn btn-default"><a href="http://localhost/ektp/admin/index.php">Dashboard</a></button>
				<button class="btn btn-warning"><a href="http://localhost/ektp/logout.php">Log Out</a></button><br>
				<div class="row duaKolom">
					<div class="col-lg-4 menuKiri">
						<ul>
							<li><a href="input.php">Input Data E-KTP</a></li>
							<li><a href="tampildata.php">Lihat/Ceta/Edit Data E-KTP</a></li>
							<li><a href="hapus.php">Hapus Data E-KTP</a></li>
							<li><a href="user.php">Manajemen User</a></li>
							<li><a href="#myModal" data-toggle="modal" data-target="#tentang">Tentang Aplikasi</a></li>
							<li><?php echo date("d-m-Y h:i:sa");?></li>
						</ul>
					</div>

					<div class="col-lg-8 menuKanan">

						<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<fieldset>
							<legend>Tambah Akun</legend>
							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">User</label>
							  <div class="col-md-6">
							  <input id="user" name="user" type="text" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">Email</label>
							  <div class="col-md-6">
							  <input id="email" name="email" type="email" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">Password</label>
							  <div class="col-md-6">
							  <input id="password" name="password" type="password" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <div class="col-md-6">
							    <button id="simpan" type="submit" name="simpan" class="btn btn-danger">Simpan</button>
							  </div>
							</div>

						</fieldset>
						</form>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$user = $_POST['user'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$password = sha1($password);
							$sql = "INSERT INTO akun (user, email, pass) VALUES ('$user', '$email', '$password')";
							if ($conn->query($sql)) {
								echo "<script>alert('Akun baru telah dibuat');document.location='http://localhost/ektp/admin/user.php';</script>";
								}else{
									echo "Akun baru gagal dibuat".$sql."<br>".$conn->error;
								}
							}
						?>
					</div>
				</div>
			</div>

			<?php include ('../footer.php'); ?>
		</div>
	</div>
</div>

</body>
</html>
