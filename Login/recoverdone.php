<?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
        error_reporting(0);
		if (isset($_SESSION['email_id'])){
        
    
        $email = $_SESSION["email_id"];
        $passw = $_POST["passwd"];
        
        $host = 'localhost';
        $user = 'root';
        $pass = '';

         $link=mysqli_connect($host, $user, $pass,'userdata');

          $sql2 = "UPDATE `register` SET `password` = '$passw' WHERE `register`.`emailid` = '$email'";
              mysqli_query($link,$sql2);
			  echo "'<b><h2>Your Password Is Changed.</h2><h3>Redirecting You To Login Page.....keep Calm And Wait.</h3></b>'";
		
              session_unset();
  header("Refresh:10; url=index.php");
		}
		else{
			echo "'<b><h2>Session Has Been Expired,</h2><br><h3>Please Try Again<br>Automatically redirecting you to login page......</h3></b>'";
			header("Refresh:5; url=index.php");
		}
      ?>