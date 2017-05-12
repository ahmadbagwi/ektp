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
							<li><a href="hapusdata.php">Hapus Data E-KTP</a></li>
							<li><a href="user.php">Manajemen User</a></li>
							<li><a href="#myModal" data-toggle="modal" data-target="#tentang">Tentang Aplikasi</a></li>
							<li><?php echo date("d-m-Y h:i:sa");?></li>
						</ul>
					</div>

					<div class="col-lg-8 menuKanan">
						<?php
						$sql = "SELECT id, user, email FROM akun";
						$result = $conn->query($sql);
						?>

						<div class="table-responsive">
						<table class="table table-condensed">
							<tr>
								<th>ID</th>
								<th>User</th>
								<th>Email</th>
								<th>Edit</th>
								<th>Hapus</th>
							</tr>
							<tr> <?php while ($row = $result->fetch_array()){ ?>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['user']; ?></td>
								<td><?php echo $row['email'];?></td>
								<?php echo "<td><a href='useredit.php?id=".$row['id']."'>Edit</a></td>"; ?>
								<?php echo "<td><a href='userhapus.php?id=".$row['id']."'>Hapus</a></td>"; ?>
							</tr> <?php } ?>
						</table>
						</div>
						<button class="btn btn-default"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/php/ektp/admin/usertambah.php">Tambah Akun</a></button>
					</div>
				</div>
			</div>

			<?php include ('../footer.php'); ?>
		</div>
	</div>
</div>

</body>

</html>
