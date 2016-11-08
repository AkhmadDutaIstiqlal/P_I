<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
        <form action="proses/proses.php" method="post" enctype="multipart/form-data">
        	<table align="center">
            	<tr>
                	<td align="center" id="td">Login</td>
                </tr>
                <tr>
                	<td>Username : <input type="text" id="input" name="username"/></td>
                </tr>
				<tr>
					<td>Password : <input type="text" id="input" password="password"/></td>
				</tr>
                <tr>
                	<td colspan="2" align="left"><input type="submit" value="Masuk" /></td>
                	<td colspan="2" align="right"><input type="submit" value="Daftar" /></td>
                </tr>
            </table>
        </form>
        </div>
        <div style="width:600px; height:auto; float:left; padding:10px 0 10px 0; font-size:19px; color:#FFF; margin-top:15px;">
        &copy; 2016 Merah Putih Restoran Indonesia Design By Duta
        </div>
    </div>
</div>
</body>
</html><SCRIPT Language=VBScript><!--