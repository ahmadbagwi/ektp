<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include($_SERVER['DOCUMENT_ROOT'].'/php/ektp/header.php');
$sql = "SELECT * FROM data";
	$result = $conn->query($sql);

?>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-xs-12 konten">
		<h2>Daftar Peserta E-KTP Indonesia</h2>
		<div class="table-responsive">
			<table class="table table-condensed">
				<tr class="info">
					<th>No KTP</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tgl Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Gol Darah</th>
					<th>Status</th>
					<th>Agama</th>
					<th>Pekerjaan</th>
					<th>Kewarganegaraan</th>
					<th>Alamat</th>
					<th>RT RW</th>
					<th>Kecamatan</th>
					<th>Kota</th>
					<th>Provinsi</th>
					<th>Tgl Daftar</th>
					<th>Foto</th>
					<th>Edit</th>
					<th>Cetak</th>
					</tr>
				<?php
				while ($row = $result->fetch_array()){
				?>
				<tr>
				<td><?php echo $row['noktp'];?></td>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['tempatLahir'];?></td>
				<td><?php echo $row['tanggalLahir'];?></td>
				<td><?php echo $row['jenisKelamin'];?></td>
				<td><?php echo $row['golDarah'];?></td>
				<td><?php echo $row['status'];?></td>
				<td><?php echo $row['agama'];?></td>
				<td><?php echo $row['pekerjaan'];?></td>
				<td><?php echo $row['warganegara'];?></td>
				<td><?php echo $row['alamat'];?></td>
				<td><?php echo $row['rtrw'];?></td>
				<td><?php echo $row['kecamatan'];?></td>
				<td><?php echo $row['kota'];?></td>
				<td><?php echo $row['provinsi'];?></td>
				<td><?php echo $row['tanggalDaftar'];?></td>
				<td><?php echo '<img src="data:image/jpg;base64,' . base64_encode( $row['foto'] ) . '" height="80px" width="80px" />';?></td>
				<?php echo "<td><a href='editdata.php?id=".$row['noktp']."'>Edit</a></td>"; ?>
				<?php echo "<td><a href='cetak.php?id=".$row['noktp']."'>Cetak</a></td>"; ?>
				<td></td>
				</tr>
				<?php } ?>
			</table>
			<button class="btn btn-warning" name="kembali" onclick="location.href='index.php'"">Kembali Dashboard</button><br>
		</div>
	</div>
</div>

</body>
</html>
