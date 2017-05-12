<?php
include('../header.php');

$id = $_GET['id']; //variabel id diambil dari noktp pada halaman tampildata

$sql = "SELECT * FROM data WHERE noktp = $id"; //sql untuk mengambil data dengan id/noktp yang sesuai
$result = $conn->query($sql);
?>

<body>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-xs-12 konten">
		<form class="form-horizontal" action="editdataproses.php" method="post" enctype="multipart/form-data">
				<fieldset>
				<!-- Form Name -->
				<legend>Edit Data E-KTP Indonesia</legend>
				<?php while ($row = $result->fetch_array()) {  //buka ekstrak data array untuk ditampilkan ?>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="nama">Nama Lengkap</label>
				  <div class="col-md-6">
				  <input id="noktp" name="noktp" type="hidden" value="<?php echo "$id";?>">
				  <input id="nama" name="nama" type="text" value="<?php echo $row['nama'];?>" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="tempatLahir">Tempat Lahir</label>
				  <div class="col-md-6">
				  <input id="tempatLahir" name="tempatLahir" type="text" value="<?php echo $row['tempatLahir'];?>" class="form-control input-md" required="" >

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="tanggalLahir">Tanggal Lahir</label>
				  <div class="col-md-6">
				  <input id="tanggalLahir" name="tanggalLahir" type="date" value="<?php echo $row['tanggalLahir'];?>" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="jenisKelamin">Jenis Kelamin</label>
				  <div class="col-md-6">
				  <div class="radio">
				    <label for="jenisKelamin-0">
				      <input type="radio" name="jenisKelamin" id="jenisKelamin-0" value="Laki-laki" <?php if ($row['jenisKelamin']=='Laki-laki') { echo "checked='checked'";} ?> >
				      Laki-laki
				    </label>
					</div>
				  <div class="radio">
				    <label for="jenisKelamin-1">
				      <input type="radio" name="jenisKelamin" id="jenisKelamin-1" value="Perempuan" <?php if ($row['jenisKelamin']=='Perempuan') { echo "checked='checked'";} ?>>
				      Perempuan
				    </label>
					</div>
				  </div>
				</div>

				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="golDarah">Golongan Darah</label>
				  <div class="col-md-6">
				    <label class="radio-inline" for="golDarah-0">
				      <input type="radio" name="golDarah" id="golDarah-0" value="A" <?php if ($row['golDarah']=='A') { echo "checked='checked'";} ?>>
				      A
				    </label>
				    <label class="radio-inline" for="golDarah-1">
				      <input type="radio" name="golDarah" id="golDarah-1" value="B" <?php if ($row['golDarah']=='B') { echo "checked='checked'";} ?>>
				      B
				    </label>
				    <label class="radio-inline" for="golDarah-2">
				      <input type="radio" name="golDarah" id="golDarah-2" value="AB" <?php if ($row['golDarah']=='AB') { echo "checked='checked'";} ?>>
				      AB
				    </label>
				    <label class="radio-inline" for="golDarah-3">
				      <input type="radio" name="golDarah" id="golDarah-3" value="O" <?php if ($row['golDarah']=='O') { echo "checked='checked'";} ?>>
				      O
				    </label>
				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="status">Status</label>
				  <div class="col-md-6">
				  <div class="radio">
				    <label for="status-0">
				      <input type="radio" name="status" id="status-0" value="Kawin" <?php if ($row['status']=='Kawin') { echo "checked='checked'";} ?>>
				      Kawin
				    </label>
					</div>
				  <div class="radio">
				    <label for="status-1">
				      <input type="radio" name="status" id="status-1" value="Belum Kawin" <?php if ($row['status']=='Belum Kawin') { echo "checked='checked'";} ?>>
				      Belum Kawin
				    </label>
					</div>
				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="agama">Agama</label>
				  <div class="col-md-6">
				  <div class="radio">
				    <label for="agama-0">
				      <input type="radio" name="agama" id="agama-0" value="Islam" <?php if ($row['agama']=='Islam') { echo "checked='checked'";} ?> >
				      Islam
				    </label>
					</div>
				  <div class="radio">
				    <label for="agama-1">
				      <input type="radio" name="agama" id="agama-1" value="Katolik" <?php if ($row['agama']=='Katolik') { echo "checked='checked'";} ?> >
				      Katolik
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-2">
				      <input type="radio" name="agama" id="agama-2" value="Protestan" <?php if ($row['agama']=='Protestan') { echo "checked='checked'";} ?> >
				      Protestan
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-3">
				      <input type="radio" name="agama" id="agama-3" value="Hindu" <?php if ($row['agama']=='Hindu') { echo "checked='checked'";} ?> >
				      Hindu
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-4">
				      <input type="radio" name="agama" id="agama-4" value="Budha" <?php if ($row['agama']=='Budha') { echo "checked='checked'";} ?> >
				      Budha
				    </label>
					</div>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="pekerjaan">Pekerjaan</label>
				  <div class="col-md-6">
				    <select id="pekerjaan" name="pekerjaan" class="form-control">
				      <option value="Swasta" <?php if ($row['pekerjaan']=='Swasta') { echo "checked='checked'";} ?>>Swasta</option>
				      <option value="PNS" <?php if ($row['pekerjaan']=='PNS') { echo "checked='checked'";} ?>>PNS</option>
				      <option value="Wirausaha" <?php if ($row['pekerjaan']=='Wirausaha') { echo "checked='checked'";} ?>>Wirausaha</option>
				      <option value="Mahasiswa/Pelajar" <?php if ($row['pekerjaan']=='Mahasiswa/Pelajar') { echo "checked='checked'";} ?>>Mahasiswa/Pelajar</option>
				    </select>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="warganegara">Kewarganegaraan</label>
				  <div class="col-md-6">
				    <select id="warganegara" name="warganegara" class="form-control">
				      <option value="WNI" <?php if ($row['warganegara']=='WNI') { echo "checked='checked'";} ?> >WNI</option>
				      <option value="WNA" <?php if ($row['warganegara']=='WNA') { echo "checked='checked'";} ?> >WNA</option>
				    </select>
				  </div>
				</div>


				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="alamat">Alamat</label>
				  <div class="col-md-6">
				    <textarea class="form-control" id="alamat" name="alamat"><?php echo $row['alamat'];?></textarea>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="rtrw">Rt/Rw</label>
				  <div class="col-md-6">
				  <input id="rtrw" name="rtrw" type="text" value="<?php echo $row['rtrw'];?>" class="form-control input-md" required="" >

				  </div>
				</div>


				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="provinsi">Provinsi</label>
				  <div class="col-md-6">
				    <select id="provinsi" name="provinsi" class="form-control">
				      <option value="<?php echo $row['provinsi'];?>"><?php echo $row['provinsi'];?></option>
				      <option value="Jawa Barat">Jawa Barat</option>
				      <option value="Jawa Tengah">Jawa Tengah</option>
				      <option value="Jawa Timur">Jawa Timur</option>
				      <option value="DKI Jakarta">DKI Jakarta</option>
				    </select>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="kota">Kota</label>
				  <div class="col-md-6">
				    <select id="kota" name="kota" class="form-control">
				      <option value="<?php echo $row['kota'];?>"><?php echo $row['kota'];?></option>
				      <option value="Bogor">Bogor</option>
				      <option value="Bandung">Bandung</option>
				      <option value="Semarang">Semarang</option>
				      <option value="Solo">Solo</option>
				      <option value="Surabaya">Surabaya</option>
				      <option value="Tuban">Tuban</option>
				      <option value="Jakarta">Jakarta</option>
				    </select>
				  </div>
				</div>


				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="kecamatan">Kecamatan</label>
				  <div class="col-md-6">
				    <select id="kecamatan" name="kecamatan" class="form-control">
				      <option value="<?php echo $row['kecamatan'];?>"><?php echo $row['kecamatan'];?></option>
				      <option value="Ciampea">Ciampea</option>
				      <option value="Dramaga">Dramaga</option>
				      <option value="Cibadak">Cibadak</option>
				      <option value="Ciomas">Ciomas</option>
				      <option value="Babakan">Babakan</option>
				      <option value="Perbon">Perbon</option>
				      <option value="Kemayoran">Kemayoran</option>
				    </select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="tanggalDaftar">Tanggal Daftar</label>
				  <div class="col-md-6">
				  <input id="tanggalDaftar" name="tanggalDaftar" value="<?php echo $row['tanggalDaftar'];?>" type="text"  class="form-control input-md">
				  </div>
				</div>


				<!-- File Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="foto">Foto (JPEG/JPG max 500x500px)</label>
				  <div class="col-md-4">
				    <input id="file" name="file" class="input-file" type="file" value="<?php echo base64_encode( $row['foto'] )?>" >
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="edit">Edit Data</label>
				  <div class="col-md-6">
				    <button id="edit" type="submit" name="edit" class="btn btn-danger">Simpan</button>
				    <button id="batal" onclick="history.go(-1);" name="batal" class="btn btn-primary">Batal</button>
				  </div>
				</div>

				</fieldset>
				</form>
				<?php
				} //tutup ekstrak data array
				 ?>
		</div>
	</div>
</div>
</body>
</html>
