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
						<?php

						$iduser = $_GET['id'];
						$sql = "SELECT id, user, email FROM akun WHERE id = $iduser";
						$result = $conn->query($sql);
						$row = $result->fetch_array();

						?>

						<form class="form-horizontal" action="usereditproses.php" method="post">
						<fieldset>
							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">User</label>
							  <div class="col-md-6">
							  <input id="iduser" name="iduser" type="hidden" value="<?php echo "$iduser";?>">
							  <input id="user" name="user" type="text" value="<?php echo $row['user'];?>" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">Email</label>
							  <div class="col-md-6">
							  <input id="email" name="email" type="email" value="<?php echo $row['email'];?>" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-6 control-label" for="user">Password</label>
							  <div class="col-md-6">
							  <input id="password" name="password" type="password" value="<?php echo ($row['pass']);?>" class="form-control input-md" required="">
							  </div>
							</div>

							<div class="form-group">
							  <div class="col-md-6">
							    <button id="edit" type="submit" name="edit" class="btn btn-danger">Edit</button>
							  </div>
							</div>

						</fieldset>
						</form>

					</div>
				</div>
			</div>

			<?php include ('../footer.php'); ?>
		</div>
	</div>
</div>

</body>
</html>
