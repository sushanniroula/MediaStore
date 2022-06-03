<html>
   
   <head>
      <title>Sending email</title>
   </head>
   
   <body>
      
      <?php
        session_start();
        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'root';
        $pass = '';

         $link=mysqli_connect($host, $user, $pass,'userdata');

          
		  $username = $_POST["username"];
		  $contact = $_POST["contact"];
          $pass = $_POST["passwd"];
          $email = $_POST["emailid"];   
          $_SESSION["username"]=$username;
          $_SESSION["contact"]=$contact;
		  
          $_SESSION["email_id"]=$email;
          $_SESSION["passwd"]=$pass;
		  
		  

          $a = rand(100,999999);
           //echo $a;
            $_SESSION["random"]=$a;


         $to = $email;
         $subject = "Registration OTP For Media Store";
		 $message = "Welcome to Media Store.\nYour Verification Code is ".$a."\nSincerely,\nThe Media Store Team &\nSushan Niroula\nCEO, Founder";
         
        
   		 //$header .= "MIME-Version: 1.0\r\n";
         $header= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message);
         
         if( $retval == true ) {
            echo '<center>'."OTP has been sent successfully...".'</center>';
              echo '<center>'."Please check your email.".'</center><br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";
            mysqli_query($link,$sql);

            include ('VerifyEmail.php');

         }else {
            echo '<center>'."OTP could not be sent...".'<br>'."Please enter valid email or check your internet connection .".'<a href="index.php">Click Here</a></center>';
         }
      ?>
      
   </body>
</html>				