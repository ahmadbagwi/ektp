<?php
if ($user = $_COOKIE['user'] and $pass = $_COOKIE['pass']){
header("location: admin/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di Aplikasi E-KTP</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" href="./js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="login konten col-lg-4 col-xs-12">
				<form action="ceklogin.php" class="form-horizontal"  method="post">
					<fieldset>
					<legend>Selamat datang di Aplikasi E-KTP Indonesia</legend>
						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-8"><input type="text" name="username" class="form-control input-md"></div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-8"><input type="password" name="password" class="form-control input-md"></div>
						</div>
							<div class="col-md-8 col-md-offset-2"><input class="btn btn-primary" type="submit" name="submit" value="Login"></div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
