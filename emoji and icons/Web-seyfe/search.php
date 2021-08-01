<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ana Səyfə</title>

<link rel="stylesheet" href="icons/css/fontawesome-all.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

		$(".box").click(function(){
			$(".Search").toggleClass("active").focus().val("");
			$(".box").toggleClass("animate");
		});
	});




</script>

<style type="text/css">

* {
	margin: 0;
	padding: 0;
}

body {
	background: #29313a;
}

.umumi {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.umumi1 {
	width: 450px;
	height: 100px;
	position: relative;

}

.Search {
	position: absolute;
	top: 20px;
	right: 50px;
	box-sizing: border-box;
	width: 0px;
	height: 63px;
	border: 3px solid #62d474;
	border-radius: 50px;
	padding: 0 20px;
	outline: none;
	font-size: 18px;
	color: #29313a;
	transition: all 0.8s ease;
}

::-webkit-input-placeholder{
	color: red;
}


.box {
	position: absolute;
	width: 80px;
	height: 80px;
	background: #62d474;
	border-radius: 50%;
	top: 10px;
	right: 45px;
	cursor: pointer;
	text-align: center;
	font-size: 20px;
	transition: all 0.8s ease;
}

.fa-search {
	color: #fff;
	margin: 31px 0 0 0 ;
}

.Search.active {
	width: 350px;
	right: 100px;
}

.box.animate {
	transform: rotate(-360deg);
	right: 100px;
}


</style>

</head>

<body>
<div class="umumi">
	<div class="umumi1">
		<input type="text" class="Search"  placeholder="Search">
		<div class="box">
			<i class=" fas fa-search"></i>
		</div>
	</div>





</div>
</body>
</html>