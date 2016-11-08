<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<style>

	body {
		background:url(img/bg.jpg);
	}
	#input {
		width:400px;
		height:auto;
		font-size:17px;
		padding:10px 0 10px 17px;
		border-radius:15px;
		-moz-border-radius:15px;
		-webkit-border-radius:15px;
		border:none;
	}
	
	#td {
		font-size:25px;
		color:#Fff;
		padding-bottom:15px;
	}
</style>
</head>

<body>
<div align="center">
	<div style="width:600px; height:auto; margin-top:100px;">
    	<div style="width:500px; height:135px; float:center; background:url(img/logo.jpg);">
        </div>
    	<div style="width:600px; height:auto; float:left; background:#922909; padding:35px 0 35px 0; box-shadow:0 0 4px #000; -moz-box-shadow:0 0 4px #000; -webkit-box-shadow:0 0 4px #000; margin-top:10px; border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
      
		<form action="prosesdaftar.php" method="POST">
		<table align="center">
		<tbody>
		<tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
		<tr><td>Nama Depan</td><td> : <input type="text" id="input" name="namadepan"/></td></tr>
		<tr><td>Nama Belakang</td><td> : <input type="text" id="input" name="namabelakang"/></td></tr>
    	<tr><td>Alamat</td><td> : <input type="text" id="input" name="alamat"/></td></tr>
		<tr><td>Email</td><td> : <input type="text" id="input" name="email"/></td></tr>
    	<tr><td>No. HP</td><td> : <input type="text" id="input" name="no.hp"/></td></tr>
		<tr><td>Password</td><td> : <input type="text" id="input" name="passwd"/></td></tr>
    	<tr><td>Jenis Kelamin</td><td> :
    	<input type="radio" name="gender" value="P"  />Pria
    	<input type="radio" name="gender" value="W"  />Wanita<br /></td></tr>
		<tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
		<tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
		</tbody>
		</table>
	</form>
	</div>
		<div style="width:600px; height:auto; float:left; padding:10px 0 10px 0; font-size:19px; color:#FFF; margin-top:15px;">
        &copy; 2016 Merah Putih Restoran Indonesia By Design Duta
        </div>
</div>
</div>
</body>