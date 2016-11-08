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
            	<td align="center">Silahkan  Pilih Pesanan Anda</td>
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
            	<td align="left"><a href="proses/logout.php" style="color:#F00; text-decoration:none;">Keluar</a></td>
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
                    <td>Meon Kucin Haro</td>
                    <td align="center">: <input type="text" class="input" name="pesan1" id="1"  /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="hataru" onclick="makanan2()" /><input type="hidden" id="hataru1" name="hataru" /></td>
                    <td>Hataru Kobisa</td>
                    <td align="center">: <input type="text" class="input" name="pesan2" id="2" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="fuida" onclick="makanan3()" /><input type="hidden" id="fuida1" name="fuida" /></td>
                    <td>Fuida Takara</td>
                    <td align="center">: <input type="text" class="input" name="pesan3" id="3" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="suishi" onclick="makanan4()" /><input type="hidden" id="suishi1" name="suishi" /></td>
                    <td>Suishi Aimana</td>
                    <td align="center">: <input type="text" class="input" name="pesan4" id="4" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="rekota" onclick="makanan5()" /><input type="hidden" id="rekota1" name="rekota" /></td>
                    <td>Rekota Datana</td>
                    <td align="center">: <input type="text" class="input" name="pesan5" id="5" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="ritana" onclick="makanan6()" /><input type="hidden" id="ritana1" name="ritana" /></td>
                    <td>Ritana Dodoshi</td>
                    <td align="center">: <input type="text" class="input" name="pesan6" id="6" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox" id="ootoshi" onclick="makanan7()" /><input type="hidden" id="ootoshi1" name="ootoshi" /></td>
                    <td>Ootashi Shisui</td>
                    <td align="center">: <input type="text" class="input"name="pesan7" id="7" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox"  id="daruto" onclick="makanan8()" /><input type="hidden" id="daruto1" name="daruto" /></td>
                    <td>Doruta Shimashi</td>
                    <td align="center">: <input type="text" class="input" name="pesan8" id="8" /></td>
                </tr>
                <tr>
                	<td><input type="checkbox"  id="iwana" onclick="makanan9()" /><input type="hidden" id="iwana1" name="iwana" /></td>
                    <td>Iwana Hitanashi</td>
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
                	<div class="img_in"><img src="img/photo1.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Bento anak anjing</p>
                    Masakan ini kami beri nama bento anak anjing, karena dibuat dengan tampilan seperti anak anjing yang membuat makanan ini terlihat indah dan rasanya pun tidak kalah lezatnya dengan tampilannya. Selamat Mencoba
                 <p align="right">Prize : <span>Rp.33.000,-</span></p></div>
                </div>
                <div class="img_center">
                	<div class="img_in"><img src="img/photo2.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Shusi ebi Roll</p>
                    Masakan ini kami beri nama sushi ebi roll ini termasuk masakan khas jepang yang paling sering diminati orang atau paling sering dibeli orang pada umunya sushi ini hanya berisiskan udang.
                 <p align="right">Prize : <span>Rp.50.000,-</span></p></div>
                </div>
                <div class="img_right">
                	<div class="img_in"><img src="img/FY0BMNBIB226AMH.MEDIUM.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Spaghetti</p>
                    mAsakan Khas Italia ini dibuat dengan bahan utamanya mie biasanya disajikan dengan saus tomat dan juga keju parmesan 
                 <p align="right">Prize : <span>Rp.15.000,-</span></p></div>
                </div>
            </div>
            
            
            <div style="width:900px; height:auto; float:left; margin:10px 0 0 25px;">
            	<div class="img_left">
                	<div class="img_in"><img src="img/photo4.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Suishi Aimana</p>
                    Sushi ini dibuat dengan berbagai macam topping yang menghiasi bagian atas sushi seperti sayuran, daging ikan, udang, telor ikan terbang, daging sapi, dll
                 <p align="right">Prize : <span>Rp.25.000,-</span></p></div>
                </div>
                <div class="img_center">
                	<div class="img_in"><img src="img/pizza.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Pizza</p>
                    Salah satu masakan khas Italia dibentuk dari roti yang dipipihkan lalu diatasnya ditaburi toping berupa irisan ayam, sosis, keju, jamur, basil/sejenis kemangi, bawang Selamat Mencoba
                 <p align="right">Prize : <span>Rp35.000,-</span></p></div>
                </div>
                <div class="img_right">
                	<div class="img_in"><img src="img/photo6.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Ritana Dodoshi</p>
                    Masakan ini kami beri nama kucin meon, yang dibuat dengan tampilan seperti gambar kucing yang membuat makanan ini terlihat indah dan rasanya pun tidak kalah lezatnya dengan tampilannya. Selamat Mencoba
                 <p align="right">Prize : <span>Rp.78.000,-</span></p></div>
                </div>
            </div>
            
            
            <div style="width:900px; height:auto; float:left; margin:10px 0 0 25px;">
            	<div class="img_left">
                	<div class="img_in"><img src="img/photo7.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Bento Meong</p>
                    Masakan ini kami beri nama kucin meon, yang dibuat dengan tampilan seperti gambar kucing yang membuat makanan ini terlihat indah dan rasanya pun tidak kalah lezatnya dengan tampilannya. Selamat Mencoba
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
                	<div class="img_in"><img src="img/photo9.jpg" /></div>
                    <div class="img_note">
                    <p id="head">Iwana Hitanashi</p>
                    Masakan ini kami beri nama kucin meon, yang dibuat dengan tampilan seperti gambar kucing yang membuat makanan ini terlihat indah dan rasanya pun tidak kalah lezatnya dengan tampilannya. Selamat Mencoba
                 <p align="right">Prize : <span>Rp.78.000,-</span></p></div>
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
