<html>
<head>
<title>
Verify Email
</title>
<script type="text/javascript">
function valid(){
if(document.ve.code.value==""){
	
	var node = document.createElement("div");
  var textnode = document.createTextNode("Please enter valid OTP");
  node.appendChild(textnode);
  document.getElementById("mydiv").appendChild(node);
	return false;
}
}

</script>
</head>
<body>
<center>
<div id="mydiv" style="color:red;"></div>
<form name="ve" method="post" action="FinalRegister.php" onsubmit="return valid()" name="fname">
<input type="text" name="code" placeholder="verification code" class="mytext" autofocus><br>
<input type="submit" name="register" value="register" class="myButton">
<input type="reset" name="clear" value="clear" class="myButton">
</form></center>
<body>

<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}


.mytext {
	
	-moz-box-shadow: 0px 10px 14px -7px #276873;

	-webkit-box-shadow: 0px 10px 14px -7px #276873;

	box-shadow: 0px 10px 14px -7px #276873;

	-moz-border-radius:8px;

	-webkit-border-radius:8px;

	border-radius:8px;

	display:inline-block;

	

	color:#408c99;

	font-family:Arial;

	font-size:20px;

	font-weight:bold;

	padding:13px 32px;

	text-decoration:none;

	text-shadow:0px 1px 0px #3d768a;

}

.mytext:hover {
	
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));

	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);

	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);

}

.mytext:active {

	position:relative;

	top:1px;

}



</html>