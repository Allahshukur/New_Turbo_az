<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daxil ol</title>
<style type="text/css">

.Daxilol {width:740px; height:auto; margin:30px auto}
.basliq1{ width:710px; height:40px; float:left; margin:10px 0 0 0; padding:25px; background:#00F; color:#000; border-radius:100px; font:30px "Times New Roman", Times, serif}
.Daxilolmaq{ width:740px; height: auto; float:left; border-radius:40px; background:#6FC; color:#F; margin:10px auto; padding:10px}

.error1 {
	color: #F00;
	margin: 0 0 0 -20px;
	}
	
.error2 {
	color:#F00;
	margin: 0 0 0 -15px;
	}
	
a{
     text-decoration: none;
}	

.span {
	padding: 0 0 0 25px;
	}	
	
#isim {
	color: red;
	border-radius: 30px;
	font-size: 17px;
	font-family: Times New Roman;
	outline: none;
	padding: 0 10px;
	margin: 0 0 0 14px;
	
    }

#soyad {
	color: red;
	border-radius: 30px;
	font-size: 17px;
	font-family: Times New Roman;
	outline: none;
	padding: 0 10px;
    margin: 0 0 0 0px;
    }	
	
#pass {
	color: red;
	border-radius: 30px;
	font-size: 17px;
	font-family: Times New Roman;
	outline: none;
	padding: 0 10px;
	margin: 0 0 0 4px;
	
    }
	
#Giriş {
	background: red;
	color: black;
	border-radius: 30px;
	font-size: 25px;
	margin: 0 0 0 30px;
	outline: none;
    }
	
.soyad1 {
	margin: 0 0 0 -5px;

}	





</style>

</head>

<body>
<div class="Daxilol">
<div class="basliq1" align="center"><b>Sayta girə bilmək üçün daxil olun</b></div>
<form action="" method="post">
<div class="Daxilolmaq" align="center">
Adınız:  <input type="text" name="isim" id="isim" placeholder="Adınız" required >  <span class="error1">*</span>
<br><br>
<span class="soyad1">Soyadınız: </span> <input type="text" name="soyad" id="soyad" placeholder="Soyadınız" required>  <span class="error1">*</span>
<br><br>
Şifrəniz:  <input type="password" name="pass" id="pass" placeholder="Şifrəniz" maxlength="7" required><span class="error2">*</span><br><br>
<input type="checkbox" name="yadda saxla" id="yadda_saxla" value="Yadda saxla" >Yadda Saxla<br><br>
<input type="submit" name="Giriş" id="Giriş" value="Daxil ol" > <br><br>

<a href="Qeydiyat.php"><b class="span">Qeydiyatınız yoxsa qeydiyatdan keçin:</b></a>
<br/><br/>

<?php 
     if($_POST) { 
        $soyad  = $_POST['soyad'];
        $isim  = $_POST['isim'];
        $pass  = $_POST['pass'];
     
    if ( $soyad=="" || $isim=="" ||  $pass=="" ){
         echo "<b>Lütfən boş alan buraxmayın</b>";
     }else { 
         error_reporting(0);
         $baglan= mysql_connect("localhost", "root");
         mysql_select_db("qeyd1",$baglan) or die("Baglanamadi");
         
         
         $giris = mysql_query("SELECT * FROM uyeler WHERE adi = '$isim' ");

         if (mysql_num_rows($giris) >0) {
            $parcalama = mysql_fetch_array($giris);
            $heqiqisifre = $parcalama['sifresi'];
            if ($heqiqisifre == $pass) {
                echo "Hörmətli <b>$soyad $isim</b> səyfəmizə xoş gəlmisiniz";
            }
            else{
                echo "<b>Girdiyiniz şifrə doğru deyil</b>";
            }
         }else{
                echo "<b>Belə bir istifadəçi yoxdur</b>";
            }

         }
     
     
     }
?>

</div>
</form>


</div>
</body>
</html>
