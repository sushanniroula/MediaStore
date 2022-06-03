<html>
   
   <head>
      <title>Sending Recovery Code</title>	  
   </head>
   
   <body>
   <?php
        
        session_start();
        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'root';
        $pass = '';

         $link=mysqli_connect($host, $user, $pass,'userdata');     
		 $email = $_POST["emailid"];   
          
		  
          $_SESSION["email_id"]=$email;
          
		  
		  

          $a = rand(1000,9999);
           
            $_SESSION["random"]=$a;


         $to = $email;
         $subject = "Recovery OTP For Media Store";
		 $message = "Your Recovery Code for Media Store account is ".$a."\nSincerely,\nThe Media Store Team &\nSushan Niroula\nCEO, Founder";
         
        
   		 //$header .= "MIME-Version: 1.0\r\n";
         $header= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message);
         
         if( $retval == true ) {
            echo '<center>'."OTP has been sent successfully...".'</center>';
              echo '<center>'."Please check your mail.".'</center><br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";
            mysqli_query($link,$sql);

            include ('Verify_recovery.php');

         }else {
            echo '<center>'."OTP could not be sent...".'<br>'."Please enter valid email or check your internet connection .".'<a href="recover.php">Click Here</a></center>';
         }
      ?>
      
   </body>
</html>				