<?php

//mengambil variabel cookie
$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];

if (!isset($user)) {
	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu ya');document.location='../';</script>";
}
?>

<html>
<head>
	<title>Halaman Dashboard Admin EKTP</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="konten">
				<div class="judul"><h2>Selamat datang <?php echo "$user"; ?> di halaman Dashboard Aplikasi E-KTP</h2></div>
				<button class="btn btn-default"><a href="../admin/index.php">Dashboard</a></button>
				<button class="btn btn-warning"><a href="../logout.php">Log Out</a></button><br>
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
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="../img/1.jpg" alt="Chania">
						    </div>

						    <div class="item">
						      <img src="../img/2.jpg" alt="Chania">
						    </div>

						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>

			<?php include ('../footer.php'); ?>
		</div>
	</div>
</div>

</body>
</html>
