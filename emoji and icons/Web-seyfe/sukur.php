<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ana Səyfə</title>

<link rel="stylesheet" href="icons/css/fontawesome-all.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

		$(".Çalışmalarımız").click(function(){
			$(".Daxil_ol").toggleClass("active").focus().val("");
			$(".box").toggleClass("animate");
		});
	});




</script>

<style type="text/css">

.error1 {
	color: #F00;
	margin: 0 0 0 -20px;
	}
	
.error2 {
	color:#F00;
	margin: 0 0 0 -15px;
	}
	
a {
	text-decoration:none;
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








.umumi {width:1350px; height:auto; margin:0px auto}

.umumi1 {
	position: relative;
	   width:1350px;
	   height:200px;
	   border-radius: 50px 40px 5px 30px;
	   background-color: #0F3;
	}
.logo{ 
 width:  100px;
 height: 100px; 
 float:left; background-image: url(image/w.png);
 background-size: 100px 100px;
 border-radius:50px;
 background-color:#00CCFF
 }

.banner{ 
        width: 1240px; 
		height: 60px;  
		float: left;
		margin:0 0 0 10px; 
		border-radius:40px;
		background:#003466; 
		color:#FFF; 
		font: 10px bold "Times New Roman",Times, serif; text-align:center; padding: 40px 0 0 0
		}
		
.menu{ 
        width: 1171px; 
        height: 47px; 
        float:left; 
		margin: 53px 0 0 0; 
		border-radius:30px; 
		background-color:#0F3; 
		color:#FFF; 
		font: 15px "Times New Roman", Times, serif 
		}
		
.sosyal{ 
        width: 150px; 
		height: 47px; 
		float: left; 
		margin: 53px 0 0 25px;
		}
		
.qeydiyat{ 
          width:1331px; 
		  height: 1500px; 
		  float:left; 
		  border-radius:15px; 
		  background:#0C9; 
		  color:#000; 
		  margin:10px auto; 
		  padding:10px
		  }
		  
.menu ul { 
          margin:0; 
		  padding:0; 
		  list-style:none;
		  }
		  
.menu ul li { 
            float:left;
			width:195px;
			 }
			 
.menu ul li ul {
	position:relative;
	display:none;
	
	}
	
.menu ul li:hover ul { 
    display: block;

}	
				 
.menu ul li b a {
	background-color:#396;
	border-radius: 30px 
	}			 
	
.menu ul li a { 
               display:block; 
			   width:195px; 
			   height: 35px; 
			   text-decoration:none; 
			   color:#000;
			   background-color:#0F3;
			   text-align:center; 
			   padding:12px 0 0 0; 
               font: 18px "Times New Roman", Times, serif ;
			   }

			   
.menu ul li a:hover{
	color:#F00;
	background-color:#0000CC;
	border-radius:30px;
	font-size:20px;
	 }

.Çalışmalarımız {
    	//transition: display 10s ease;
}	 

.Daxil_ol {
	display: none;
	width: 410px;
	height: 270px;
	background: red;
	text-align: center;
	position: relative;
	border-radius: 30px;
	left: 280px;
	margin: -70px 0 0 0 ;
	padding: 20px 0 0 0 ;
	top: -350px;
	transition: top 0.8s ease;
}

.Daxil_ol.active {
	display: block;
	top: 0px;
	transition: top 0.8s ease;
}




</style>

</head>

<body>
<div class="umumi">

<div class="umumi1">
<div class="logo"></div>
<div class="banner"><b> WEB SEYFE </b></div>
<div class="menu">
    <ul>
        <li><b><a href="elave.php"><b><i class="fas fa-home"></i> Ana Səyfə</b></a></b></li>
        <li><a href="">Haqqımızda</a>
          <ul>
               <li><a href="elave.php">Haqqimda 1</a></li>
               <li><a href="">Haqqımda 2</a></li>
               <li><a href="">Haqqimda 3</a></li>
               <li><a href="Daxil ol.php">Haqqimda 4</a></li>
               <li><a href="Qeydiyat.php">Haqqimda 5</a></li>
               <li><a href="Bizimle elaqe.php">Haqqimda 6</a></li>
           </ul>
                  </li>
        <li><a href="#"><span class="Çalışmalarımız">Çalışmalarımız</span></a></li>
        <li><a href="Daxil ol.php"><span class="samir">Daxil ol</span></a></li>
        <li><a href="Qeydiyat.php">Qeydiyat</a></li>
        <li><a href="Bizimle elaqe.php">Bizimlə əlaqə</a></li>
    </ul>

</div>
<div class="sosyal">
<a href="https://web.facebook.com/allahsukur.agazade"><img src="image/facebook.png" width="45"></a>
<a href="https://twitter.com/login"><img src="image/Twitter.png" width="45"></a>
<a href="https://www.instagram.com/"><img src="image/instagram.jpg" width="46"></a>
</div></div>


<div class="qeydiyat">

<p>ndkfjndkjbfjskfvjdbvfcbvjchvbxjbcjxzhcxvcfsuifidgvbyurgwdhxjlxzk ctefhsb hzmpdehf cxcibxcjdbx</p>


<div class="Daxil_ol">

<form action="" method="post" class="">
Adınız:  <input type="text" name="isim" id="isim"  placeholder="Adınız" required >  <span class="error1">*</span>
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

</form>

</div>

</div>

</div>
</body>
</html>