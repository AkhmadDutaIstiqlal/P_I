<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Menu Resto Merah Putih</title>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript">
	$(document).ready(function() {
        $(".left1").hide();
    });
	
	$(document).ready(function() {
        $(".left2").click(function()
		{
			$(".left1").animate({width:'toggle'},100);
		});
    });
</script>
<style>
	#head {
		color:#F00;
	}
	
	a:hover {
		color:#900;
		text-decoration:underline;
	}
</style>
</head>

<body>
<div style="width:100%; height:auto; float:left">
	<div align="left">
        <div style="width:199px; height:auto; float:left; background:#000; padding:15px 0 15px 0; color:#FFF; font-size:17px">
        	<table align="center" width="200">
            <tr>
            	<td align="center">Selamat Datang Di Restoran Merah Putih</td>
            </tr>
            <tr>
            	<td align="center"><?php echo $_SESSION['username'] ?></td>
            </tr>
            <tr>
            	<td align="left"><a href="proses/home.php" style="color:#F00; text-decoration:none;">Home</a></td>
            </tr>
            <tr>
            	<td align="left"><a href="proses/resep.php" style="color:#F00; text-decoration:none;">Resep</a></td>
            </tr>
            <tr>
            	<td align="left"><a href="proses/login.php" style="color:#F00; text-decoration:none;">login</a></td>
            </tr>
            </table>
        </div>
    	<div class="left">
        	<div class="left1">
            <form action="proses/pesan.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="Meja 1" name="meja" />
            <table style="margin-top:15px">
            	<tr>
                	<td colspan="3" align="center" style="background:#FF6; color:#333">Daftar Pesanan Makanan</td>
                </tr>
                <tr height="5">
                	<td colspan="3"></td>
                </tr>
                <tr>
                	<td></td>
                	<td width="160">Nama Makanan</td>
                    <td>Jumlah Pesan</td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="meno" onclick="makanan1()" /><input type="hidden" id="meno1" name="meno" /></td>
                    <td>Bento Panda</td>
                    <td align="center">: <input type="text" class="input" name="pesan1" id="1"  /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="hataru" onclick="makanan2()" /><input type="hidden" id="hataru1" name="hataru" /></td>
                    <td>Sushi Ebi Tempura Roll</td>
                    <td align="center">: <input type="text" class="input" name="pesan2" id="2" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="fuida" onclick="makanan3()" /><input type="hidden" id="fuida1" name="fuida" /></td>
                    <td>Spagetthi</td>
                    <td align="center">: <input type="text" class="input" name="pesan3" id="3" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="suishi" onclick="makanan4()" /><input type="hidden" id="suishi1" name="suishi" /></td>
                    <td>Suishi</td>
                    <td align="center">: <input type="text" class="input" name="pesan4" id="4" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="rekota" onclick="makanan5()" /><input type="hidden" id="rekota1" name="rekota" /></td>
                    <td>Pizza</td>
                    <td align="center">: <input type="text" class="input" name="pesan5" id="5" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="ritana" onclick="makanan6()" /><input type="hidden" id="ritana1" name="ritana" /></td>
                    <td>Soto Ayam</td>
                    <td align="center">: <input type="text" class="input" name="pesan6" id="6" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="ootoshi" onclick="makanan7()" /><input type="hidden" id="ootoshi1" name="ootoshi" /></td>
                    <td>Bento Sarang Burung</td>
                    <td align="center">: <input type="text" class="input"name="pesan7" id="7" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox"  id="daruto" onclick="makanan8()" /><input type="hidden" id="daruto1" name="daruto" /></td>
                    <td>Ramen</td>
                    <td align="center">: <input type="text" class="input" name="pesan8" id="8" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox"  id="iwana" onclick="makanan9()" /><input type="hidden" id="iwana1" name="iwana" /></td>
                    <td>Gado - Gado</td>
                    <td align="center">: <input type="text" class="input" name="pesan9" id="9" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox"  id="iwana" onclick="makanan9()" /><input type="hidden" id="iwana1" name="iwana" /></td>
                    <td>Nasi Goreng Seafood</td>
                    <td align="center">: <input type="text" class="input" name="pesan9" id="9" /></td>
                </tr>
                <tr height="10">
                <td></td>
                </tr>
                <tr>
                	<td colspan="3" align="center"><input id="submit" type="submit" value="PESAN" /></td>
                </tr>
            </table>
            </form>
            </div>
            <div class="left2"></div>
        </div>
    </div>
    
    
	<div align="center">
    <div style="width:950px; height:auto;">
    	<div class="right">
        <div align="center">
        	<div style="width:900px; height:auto;">
            	<div class="img_left">
                	<div class="img_in"><img src="img/bento-panda.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Bento panda</p>
                    Mau membawa bekal nasi yang berbeda dan gizi yang lengkap? Kreasi bento panda satu ini pas banget untuk menjadi pilihan. Karbohidratnya cukup, lauknya memiliki kandungan protein, dan juga ada berbagai jenis sayuran segar.
                 <p align="right">Prize : <span>Rp.30.000,-</span></p></div>
                </div>
                <div class="img_center">
                	<div class="img_in"><img src="img/photo2.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Shusi Ebi Tempura Roll</p>
                    Krenyes renyah gurih bagian luarnya dan segar di bagian tengahnya. Inilah rasa sushi yang berisi ebi tempura. Dijamin Anda jadi ketagihan karena rasa uniknya.
                 <p align="right">Prize : <span>Rp.40.000,-</span></p></div>
                </div>
                <div class="img_right">
                	<div class="img_in"><img src="img/FY0BMNBIB226AMH.MEDIUM.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Spaghetti</p>
                    Masakan Khas Italia ini dibuat dengan bahan dasar utamanya mie biasanya disajikan dengan saus tomat dan juga keju parmesan 
                 <p align="right">Prize : <span>Rp.12.000,-</span></p></div>
                </div>
            </div>
            
            
            <div style="width:900px; height:auto; float:left; margin:10px 0 0 25px;">
            	<div class="img_left">
                	<div class="img_in"><img src="img/Resep-sushi-jepang.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Suishi</p>
                    Sushi merupakan salah satu makanan Jepang yang banyak digemari oleh banyak orang, baik di dalam negeri ataupun di luar negeri. Sebenarnya sushi terbuat dari nasi yang dibentuk bersama dengan lauk dan sayuran.
                 <p align="right">Prize : <span>Rp.15.000,-</span></p></div>
                </div>
                <div class="img_center">
                	<div class="img_in"><img src="img/pizza.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Pizza</p>
                    Salah satu masakan khas Italia dibentuk dari roti yang dipipihkan lalu diatasnya ditaburi toping berupa irisan ayam, sosis, keju, jamur, basil/sejenis kemangi, bawang Selamat Mencoba
                 <p align="right">Prize : <span>Rp35.000,-</span></p></div>
                </div>
                <div class="img_right">
                	<div class="img_in"><img src="img/soto2Bayam2Bponorogo.jpeg.600x0_q85_crop-smart_upscale.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Soto Ayam</p>
                   Tak hanya terkenal karena rasanya yang lezat, Soto juga memiliki tampilan yang indah. Makanan khas Indonesia ini paling nikmat jika di makan ketika musim hujan. Perpaduan udara yang dingin dan kuahnya yang panas adalah perpaduan yang pas bagi kita.
                 <p align="right">Prize : <span>Rp.7.000,-</span></p></div>
                </div>
            </div>
            
            
            <div style="width:900px; height:auto; float:left; margin:10px 0 0 25px;">
            	<div class="img_left">
                	<div class="img_in"><img src="img/bento-bird-nest.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Bento Sarang Burung</p>
                   Ingin membawa menu pasta sebagai bekal? Coba kreasi bird nest bento ini deh. Menu bekal pastamu nggak hanya jadi terlihat indah, tetapi juga lebih bergizi.
                 <p align="right">Prize : <span>Rp.32.000,-</span></p></div>
                </div>
                <div class="img_center">
                	<div class="img_in"><img src="img/photo8.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Ramen</p>
                    Salah satu maskan khas Jepang ini dibuat dengan bahan utamanya yaitu mie dan ada beberapa campuran yang lain seperti bakso ikan, bakso sapi, daging ayam, udang dan telor.
                 <p align="right">Prize : <span>Rp.10.000,-</span></p></div>
                </div>
                <div class="img_right">
                	<div class="img_in"><img src="img/Gado_gado.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Gado - Gado</p>
                   Makanan khas selanjutnya adalah gado gado. Gado gado adalah makanan khas jawa berupa sayur sayuran yang direbus dan dicampur menjadi satu. Makanan ini mempunyai bumbu khas kacang tanah yang di haluskan.
                 <p align="right">Prize : <span>Rp.5.000,-</span></p></div>
                </div>
                
                <div style="width:900px; height:auto; float:left; margin:10px 0 0 25px;">
                <div class="img_left">
                	<div class="img_in"><img src="img/nasgor seafood.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Nasi Goreng Seafood</p>
                    Nasi Goreng ini memiliki cita rasa laut karena nasi goreng ini dibuat lalu dicampur dengan udang, potongan ikan teri, cumi-cumi, dan juga nasi goreng tidak akan lengkap tanpa telor
                 <p align="right">Prize : <span>Rp.9.500,-</span></p></div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

</body>
</html>
<?php
}
