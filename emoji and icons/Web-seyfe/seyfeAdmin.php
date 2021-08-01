<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML-kodlari</title>

<link rel="stylesheet" type="text/css" href="icons/css/fontawesome-all.min.css" />

<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" href="Animate/css/animate.css">


<style type="text/css">
    .sukur {
    	margin: 20px 0 0 0;
    }

.text {
	padding: 0 0 0 10px;
	width: 200px;
	height: 35px;

}    

textarea {
	padding: 0 0 0 10px;
	width: 200px;
	height: 150px;
	outline: ;
}
  

</style>

</head>

<body>
	<div class="samir text-center" id="samir1">
		<h1>Basliq</h1>
		<p>SALAM necesiz?</p>
	</div>

     
     <div class="sukur text-center" id="sukur">
     	<input type="text" class="text" name="text" id="text" placeholder="Basliq Əlavə Ed" /></br></br>
     	<textarea name="textarea" id="textarea" placeholder="Yazi Əlavə Ed"></textarea></br></br>
     	<input type="submit" onclick="button()" name="submit" id="submit" value="Əlavə ed"/>
     </div>





     <script>
	   function button(){
	   	    
	     	var x = document.getElementById("text").value;
	        var x1 = document.getElementById("textarea").value;
                var y = document.createElement("h1");
                var y1 = document.createElement("p");

	     	    var c = document.createTextNode(x);
	     	    var c1 = document.createTextNode(x1);
	     	         y.appendChild(c);
	     	         y1.appendChild(c1);
	     	    var z = document.getElementById("samir1");
	     	    var z1 = document.getElementById("samir1");

	     	        z.appendChild(y);
	     	        z1.appendChild(y1);



	     }
        

     </script>

       

<script src="Animate/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>


<script src="jQuery/jquery-3.3.1.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>