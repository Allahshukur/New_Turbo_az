
<?php 
     if($_POST) { 
	 $isim  = $_POST['isim'];
	 $soyad  = $_POST['soyad'];
     $email  = $_POST['email'];
	 $tel  = $_POST['tel'];
      // echo "Adınız:" .$isim."<br/> Soyadınız:" .$soyad." <br/> E-mail:" .$email. "<br/> Telefon nömrəsi:" .$tel. 
   // "<br/> Şifrəniz:" .$pass ;   
	 $cinsiyet  = $_POST['cinsiyet'];
	 $pass  = $_POST['pass'];
	 
	if ($isim=="" || $soyad=="" || $email=="" || $tel=="" || $cinsiyet=="" ||  $pass=="" ){
		 echo "<b>Lütfən boş alan buraxmayın</b>";
	 }else { 
	 	
		 $baglan= mysql_connect("localhost", "root");
		 mysql_query("SET NAMES UTF8");
		 mysql_select_db("qeyd1",$baglan) or die("Baglanamadi");
         
         $qeyd = mysql_query("INSERT INTO uyeler (adi,soyadi,email,tel,cinsiyeti,sifresi) VALUES ('$isim','$soyad','$email','$tel','$cinsiyet','$pass') ");

          if ($qeyd) {
          	echo "<b>Qeydiyat uğurla başa çatdı:</b> <br/> Adınız:" .$isim."<br/> Soyadınız:" .$soyad." <br/> E-mail:" .$email. "<br/> Telefon nömrəsi:" .$tel. 
                   " <br/> Cinsiyətiniz:" .$cinsiyet. "<br/> Şifrəniz:" .$pass ; ;
     
          }else{
          	echo "<b>Qeydiyat uğursuz oldu</b>";
          }

	     }
	 
	 
	 }
?>

