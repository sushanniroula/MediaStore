<html>
<head>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="rcss/style.css">
<script type="text/javascript">
function valid(){
if(document.fname.code.value==""){
	
	var node = document.createElement("div");
  var textnode = document.createTextNode("Please enter your OTP");
  node.appendChild(textnode);
  document.getElementById("mydiv").appendChild(node);
	return false;
}
}
function imgclick(){
	
a=document.fname.field1.value;
b=document.fname.field2.value;
c=document.fname.field3.value;
d=document.fname.field4.value;
 var num= a+b+c+d;
document.fname.code.value=num;
 }
 </script>
</head>

<body>

<div class="container">
  <h1>Media Store</h1>
  <p>Type the code that you received in your e-mail below:</p>
  <form name="fname" id="fom" method="post" action="finalrecover.php" onsubmit="return valid()">
  <div class="inputs" id="inputs">
    <input maxlength="2" placeholder="•" value="" name="field1" autofocus />
    <input maxlength="2" placeholder="•" value="" name="field2"/>
    <input maxlength="2" placeholder="•" value="" name="field3"/>
    <input maxlength="1" placeholder="•" value="" name="field4"/>
    <input type="image" alt="submit" src="download.png" onmouseover="imgclick()">
	
  </div>
  
	<input type="text" name="code" value="" hidden>
	</form>
</div>
  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

    <script src="jas/index.js"></script>

</body>

</html>