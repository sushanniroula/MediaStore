<html>
<head><title>MediaStore-Dashboard</title></head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body>
<main>
<?php
$host="localhost";
$user="root";
$password="";
$link = mysqli_connect($host,$user,$password,'userdata');
      session_start();
	  $email=$_SESSION["emailid"];
      if(!isset($_SESSION['emailid']))
{
	
    // not logged in
    header('Location: ../login/index.php');
    exit();
}
		$sql="SELECT * from images WHERE email='$email' AND status='1' ";
		$res = mysqli_query($link,$sql);
		  while($temp=mysqli_fetch_assoc($res))
                { 
			                $img = 'uploads/'.$temp["file_name"];
                    		$e = $temp['email'];
                            $u = $temp['status'];
                            $up = $temp['uploaded_on'];

							
                  }
				  //echo $e. $up .$email .$u;
				  
				  
				  
				 
?>


<img id="zoom" src="<?php echo $img; ?>" alt="" style="border-radius: 50%; float:left; padding: 1px; background-color: #FF6347;" height="51" width="51"/>




 <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
body{
	//height: 100vh;
//display:flex;
align-items:center;
justify-content:center;
padding:40px;
font:26px/1.5 'Open Sans',sans-serif;
color:#345;
 background-image: url('download.jpg');
   background-repeat: no-repeat;
 background-position: center center;
 -webkit-background-size: cover;
  -moz-background-size: cover;
}

p:not(:last-child) {
  margin: 0 0 20px;
}

main {
  color: aqua;
  max-width: 1115px;
  padding: 40px;
  border: 3px solid rgba(0,0,0,.2);
  background: rgba(27, 48, 82, 0.3);
  box-shadow: 0 1px 3px rgba(0,0,0,.1);
  border-radius: 0 25px 15px 0;
  
}

section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #abc;
}

#tab1,#tab2,#tab3,#tab4,#tab5 {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #abc;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

label[for*='1']:before { content: '\f015'; }
label[for*='2']:before { content: '\f2bd'; }
label[for*='3']:before { content: '\f093'; }
label[for*='4']:before { content: '\f019'; }
label[for*='5']:before { content: '\f013'; }

label:hover {
  color: #789;
  cursor: pointer;
}

input:checked + label {
  color: #0af;
  border: 1px solid #abc;
  border-top: 2px solid #0af;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5 {
  display: block;
}

@media screen and (max-width: 800px) {
  label {
    font-size: 0;
  }
  label:before {
    margin: 0;
    font-size: 18px;
  }
}

@media screen and (max-width: 500px) {
  label {
    padding: 15px;
  }
}
 
 #zoom:hover {
  transform: scale(4.5);
 }
 #zoom {
  padding: 50px;
  background-color: green;
  transition: transform .4s; /* Animation */
  margin: 0 auto;
}
 </style>

  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Home</label>

  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Profiles</label>

  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Uploads</label>

  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">Downloads</label>

  <input id="tab5" type="radio" name="tabs">
  <label for="tab5">Settings</label>
  <?php
	$sql="SELECT * from register WHERE emailid='$email'";
		$res = mysqli_query($link,$sql);
		  while($temp=mysqli_fetch_assoc($res))
                { 
			                $name = $temp['username'];
                    		$contact = $temp['contact'];
                            $address = $temp['address'];
                            $dob = $temp['DOB'];
                            $bio = $temp['bio'];

							
                  }
				  
				  ?>
  <section id="content1">
    <p style="display: block;">
     
<u><?php echo ucwords($name);?></u>
</p>
<script type="text/javascript">
function get(str){
	document.getElementById("image").src=str;
	
	str = str.split(""); //convert 'jQuery' to array
	str = str.reverse(); //reverse 'jQuery' order 
    str = str.join(""); //then join the reverse order values together
	str = str . substr ( 0, str . length - 42  );
	
	str = str.split(""); //convert 'jQuery' to array
	str = str.reverse(); //reverse 'jQuery' order 
    str = str.join(""); //then join the reverse order values together
	
	
	
	document.getElementById("images").value=str;
	
}
</script>
<?php
		$query="SELECT * FROM images WHERE email='$email' ORDER BY id DESC";
		$result=mysqli_query($link,$query);
		while($row=mysqli_fetch_array($result)){
			echo '
				<tr>
					<td>
					
  <!-- Trigger the modal with a button -->
  <button type="button" data-toggle="modal" data-target="#myModal"> <img src="uploads/'.($row['file_name']).'" height="150" width="155" style="border-radius: 10px 10px 0 0;" onclick="get(this.src)"/> </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Images</h4>
        </div>
        <div class="modal-body">
       
				<p><img src="" height="360" width="570" style="border-radius: 10px 10px 0 0;" id="image"/></p>	
				
        </div>
		<div>	
		<form method="post" action="">
			<button type="submit" name="changeprofile" class="btn">Make This Profile</button>
			<input type="text" id="images" name="images" hidden>
			<button class="btn" name="download">Download</button>
			<button class="btn btn-default" name="delete">Delete</button>
		</form>
		
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
			
			</td>
				</tr>
				</table>
			';
			
		} 
		
		//for changing profile
		if(isset($_POST["changeprofile"])){
			
			$tempfile=$_POST["images"];
			
			
			//$main=ltrim($tempfile, 'http://localhost/project/homepage/upload/');
			//$file=strrev($tempfile);  //filename reverse
			//$main=rtrim($file, '/sdaolpu/egapemoh/tcejorp/tsohlacol//:ptth');
			//$m=strrev($main);
			
			$link->query("UPDATE `images` SET `status` = '0' WHERE `images`.`status` = '1' AND `images`.`email`='".$email."';");
			$link->query("UPDATE `images` SET `status` = '1' WHERE `images`.`file_name` = '".$tempfile."' AND `images`.`email`='".$email."';");
		
		}
		
		//for downloading particular file
		if(isset($_POST["download"])){
			$tempfile=$_POST["images"];echo $tempfile;
			
			}
		
		//for deleting particular file
		if(isset($_POST["delete"])){
			
			$tempfile=$_POST["images"];
			
			//$main=ltrim($tempfile, 'http://localhost/project/homepage/upload/');
			
			$link->query("DELETE FROM `images` WHERE `images`.`file_name` = '".$tempfile."' AND `images`.`email`='".$email."';");
			
			
		}
		
		if(isset($_POST["changepassword"])){
			
			$newpassword=$_POST["newpassword"];
			$link->query("UPDATE `register` SET `password` = '".$newpassword."' WHERE `register`.`emailid` = '".$email."'");
			
		echo'
			<script>alert("Password successfully changed");
			</script>';
		}
		?>
  </section>

  <section id="content2">

	<img src="<?php echo $img; ?>" style="border-radius: 50%; float:left; padding: 1px; background-color: #7F68f7;" height="250" width="250"/>
	
	
	<h2><?php  echo " ".ucwords($name); ?></h2><br><br>
	
<style>
.square_btn {
    position: relative;
    display: inline-block;
    font-weight: bold;
    padding: 0.5em 0.1em;
    text-decoration: none;
    color: #00BCD4;
    background: #ECECEC;
    border-radius: 0 25px 15px 0;
    transition: .4s;
  }

.square_btn:hover {
    background: #636363;
}


</style>
	<form action="change_profile.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="file" class="square_btn"/><br>
    <input type="submit" name="change" value="Change Profile" class="square_btn"/>
   </form>
   
	<h3><p style="display: block;"><?php  echo "Name: ".ucwords($name); ?><br><br>
	Email:<?php echo " ".$email; ?><br><br>
	<button id="infoo" class="square_btn"><h2><u>My Information</u></h2></button><br>
	<div id="info">
	Address:<?php echo " ".ucwords($address); ?><br><br>
	Contact No.:<?php echo " ".$contact; ?><br><br>
	D.O.B:<?php echo " ".$dob; ?><br><br>
	Bio:<textarea name="bio" readonly><?php echo ucwords($bio); ?></textarea></p>
	</h3>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
$(document).ready(function(){
  $("#infoo").click(function(){
    $("#info").toggle();
  });
});

$(document).ready(function(){
  $("#change_password_btn").click(function(){
    $("#change_password").show();
	$("#change_password_btn").hide();
	$("#change_password_btns").show();
	$("#change_password").focus();
  });
});
$(document).ready(function(){
  $("#change_password_btn").click(function(){
    $("#change_passwords").show();
  });
});
window.onload=function(){
	$("#change_password").hide();
		
}

</script>
<script type="text/javascript">

window.onload=function(){
	$("#info").hide();
	$("#change_password_btns").hide();
}
var name;
function change_names(){
	
	name=document.getElementById('change_name').value;
	document.getElementById('change_name').removeAttribute("disabled");
	document.getElementById('change_name').value="";
	document.getElementById('change_name').focus();
	$("#prechange").hide();
	$("#changenamebtn").show();
	
}
function haha(){
	
	document.getElementById('change_name').value=name;
	//document.getElementById('change_name').setAttribute("disabled");
	
	
}
function valid(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
				
				if (password.length <= 6) {
					var colors="red";
					document.getElementById("msg").style.color = colors;
                    document.getElementById("msg").innerHTML = "Password Length Is Too Small";
                    return;
                }
				if (password!=document.getElementById("change_password").value||password!=document.getElementById("change_passwords").value) {
					var colors="red";
					document.getElementById("msg").style.color = colors;
                    document.getElementById("msg").innerHTML = "Password Doesn't Matched";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[~`!@#$%^&*?]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Weak";
                        color = "yellow";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
	}
</script>
 
  
	  
    
    
  </section>

  <section id="content3">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="Upload"/>
   </form>
   Note:Web browsers don't recognize word spaces in links or file downloads. The person that posted the file should have used underscores to name their file correctly.<br>ThAnK YoU
  </section>

  <section id="content4">
    <!--Download section-->
	<?php
	$query="SELECT * FROM images WHERE email='$email' ORDER BY id DESC";
		$result=mysqli_query($link,$query);
		while($row=mysqli_fetch_array($result)){
			echo'
			<img src="uploads/'.($row['file_name']).'" height="150" width="155" style="border-radius: 10px 10px 0 0;"/>';
		}
			?>
  </section>
  
  <section id="content5">
    
    <form method="POST" action="">
	<div>
		<input type="text" id="change_name" name="change_namee" placeholder="Enter Your New Name" value="<?php echo ucwords($name);?>" disabled>
		<input type="button" name="change_name_btn" id="prechange" onclick="change_names()" value="Change Name">
		<button id="changenamebtn" name="changenameebtn" hidden>Change</button>
		<br><br>
		</div>
		<div  onclick="haha()">
			<input type="button" id="change_password_btn" onclick="change_password()" value="Change Password">
			<input type="password" id="change_password" placeholder="Enter New Password" onfocus="valid(this.value)" onkeyup="valid(this.value)" hidden>
		</div>
		<div>
			<input type="password" name="newpassword" id="change_passwords" placeholder="Re-Type Password" onfocus="valid(this.value)" onkeyup="valid(this.value)" hidden>
			<span id="msg"></span>
		</div>
		<button id="change_password_btns" name="changepassword">  Change  New  Password </button>	  
	  <br>
	  </form>
	  <a href="logout.php"><button name="logout">Logout</button></a>
	  <a href="deleteaccount.php"><button name="delete">Permanently Delete My Account</button></a>
	<?php
		if(isset($_POST['changenameebtn'])){
			$newname=$_POST['change_namee'];
			if($newname==""){
				echo'<script>alert("Failed! please enter new name");</script>';
			}else{
			$change="update register set username='$newname' where emailid='$email'";
			$success=mysqli_query($link,$change);
			if($success){
				echo'<script>alert("Name changed successfully");</script>';
			}else{
				echo'<script>alert("Failed! please try again");</script>';
			}
			}
		}
	?>
    
  </section>

</main>
</body>
</html>