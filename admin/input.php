<?php
include('../header.php');
?>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-offset-2 col-xs-12 konten">
			<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				<fieldset>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="noktp">No. KTP</label>
				  <div class="col-md-6">
				  <input id="noktp" name="noktp" type="text" placeholder="Unik akan terisi otomatis" class="form-control input-md">

				  </div>
				</div>

				<!-- Form Name -->
				<legend>Form Pendaftaran E-KTP Indonesia</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="nama">Nama Lengkap</label>
				  <div class="col-md-6">
				  <input id="nama" name="nama" type="text" placeholder="Diawali huruf besar" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="tempatLahir">Tempat Lahir</label>
				  <div class="col-md-6">
				  <input id="tempatLahir" name="tempatLahir" type="text" placeholder="Kota kelahiran" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="tanggalLahir">Tanggal Lahir</label>
				  <div class="col-md-6">
				  <input id="tanggalLahir" name="tanggalLahir" type="date" placeholder="Format mm/dd/yyyy" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Multiple Radios -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="jenisKelamin">Jenis Kelamin</label>
				  <div class="col-md-6">
				  <div class="radio">
				    <label for="jenisKelamin-0">
				      <input type="radio" name="jenisKelamin" id="jenisKelamin-0" value="Laki-laki" checked="checked">
				      Laki-laki
				    </label>
					</div>
				  <div class="radio">
				    <label for="jenisKelamin-1">
				      <input type="radio" name="jenisKelamin" id="jenisKelamin-1" value="Perempuan">
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
				      <input type="radio" name="golDarah" id="golDarah-0" value="A" checked="checked">
				      A
				    </label>
				    <label class="radio-inline" for="golDarah-1">
				      <input type="radio" name="golDarah" id="golDarah-1" value="B">
				      B
				    </label>
				    <label class="radio-inline" for="golDarah-2">
				      <input type="radio" name="golDarah" id="golDarah-2" value="AB">
				      AB
				    </label>
				    <label class="radio-inline" for="golDarah-3">
				      <input type="radio" name="golDarah" id="golDarah-3" value="O">
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
				      <input type="radio" name="status" id="status-0" value="Kawin" checked="checked">
				      Kawin
				    </label>
					</div>
				  <div class="radio">
				    <label for="status-1">
				      <input type="radio" name="status" id="status-1" value="Belum Kawin">
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
				      <input type="radio" name="agama" id="agama-0" value="Islam" checked="checked">
				      Islam
				    </label>
					</div>
				  <div class="radio">
				    <label for="agama-1">
				      <input type="radio" name="agama" id="agama-1" value="Katolik">
				      Katolik
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-2">
				      <input type="radio" name="agama" id="agama-2" value="Protestan">
				      Protestan
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-3">
				      <input type="radio" name="agama" id="agama-3" value="Hindu">
				      Hindu
				    </label>
					</div>
				   <div class="radio">
				    <label for="agama-4">
				      <input type="radio" name="agama" id="agama-4" value="Budha">
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
				      <option value="Swasta">Swasta</option>
				      <option value="PNS">PNS</option>
				      <option value="Wirausaha">Wirausaha</option>
				      <option value="Mahasiswa/Pelajar">Mahasiswa/Pelajar</option>
				    </select>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="warganegara">Kewarganegaraan</label>
				  <div class="col-md-6">
				    <select id="warganegara" name="warganegara" class="form-control">
				      <option value="WNI">WNI</option>
				      <option value="WNA">WNA</option>
				    </select>
				  </div>
				</div>


				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="alamat">Alamat</label>
				  <div class="col-md-6">
				    <textarea class="form-control" id="alamat" name="alamat"></textarea>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="rtrw">Rt/Rw</label>
				  <div class="col-md-6">
				  <input id="rtrw" name="rtrw" type="text" placeholder="Format 005/002" class="form-control input-md" required="">

				  </div>
				</div>


				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="provinsi">Provinsi</label>
				  <div class="col-md-6">
				    <select id="provinsi" name="provinsi" class="form-control">
				      <option value="">---</option>
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
				      <option value="">---</option>
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
				      <option value="">---</option>
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
				  <input id="tanggalDaftar" name="tanggalDaftar" type="text" value="<?php echo date("Y-m-d H-i-s"); ?>" class="form-control input-md">
				  </div>
				</div>

				<!-- File Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="foto">Foto (JPEG/JPG max 500x500px)</label>
				  <div class="col-md-4">
				    <input id="file" name="file" class="input-file" type="file">
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-6 control-label" for="simpan">Simpan Data</label>
				  <div class="col-md-6">
				    <button id="simpan" type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				    <button id="batal" onclick="location.href='index.php';" name="batal" class="btn btn-primary">Batal</button>
				  </div>
				</div>

				</fieldset>
				</form>

				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$noktp = $_POST['noktp'];
					$nama = $_POST['nama'];
					$tempatLahir = $_POST['tempatLahir'];
					$tanggalLahir = $_POST['tanggalLahir'];
					$jenisKelamin = $_POST['jenisKelamin'];
					$golDarah = $_POST['golDarah'];
					$status = $_POST['status'];
					$agama = $_POST['agama'];
					$pekerjaan = $_POST['pekerjaan'];
					$warganegara = $_POST['warganegara'];
					$alamat = $_POST['alamat'];
					$rtrw = $_POST['rtrw'];
					$kecamatan = $_POST['kecamatan'];
					$kota = $_POST['kota'];
					$provinsi = $_POST['provinsi'];
					$tanggalDaftar = $_POST['tanggalDaftar'];
					//Upload Foto
					$file_name = $_FILES['file']['name'];
					$tmp_name = $_FILES['file']['tmp_name'];
					$file_size = $_FILES['file']['size'];
					$file_type = $_FILES['file']['type'];
					$fp = fopen($tmp_name, 'r');
					$file_content = fread($fp, $file_size) or die ("Tidak dapat membaca source file");
					$file_content = mysqli_real_escape_string($conn, $file_content) or die ("Tidak dapat membaca source file 2");
					fclose($fp);

					$sql = "INSERT INTO data (nama, tempatLahir, tanggalLahir, jenisKelamin, golDarah, status, agama, pekerjaan, warganegara, alamat, rtrw, kecamatan, kota, provinsi, tanggalDaftar, foto) VALUES ('$nama', '$tempatLahir', '$tanggalLahir', '$jenisKelamin', '$golDarah', '$status', '$agama', '$pekerjaan', '$warganegara', '$alamat', '$rtrw', '$kecamatan', '$kota', '$provinsi', '$tanggalDaftar', '$file_content')";

					if ($conn->query($sql)) {
						echo "<script>alert('Data telah berhasil disimpan');document.location='http://localhost/ektp/admin/tampildata.php';</script>";
					}else{
						echo "Data gagal disimpan "."<br>".$conn->error;
					}
				}
				?>


</body>
</html>
