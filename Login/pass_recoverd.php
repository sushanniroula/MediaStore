<html>
   
   <head>
      <title>Final State</title>
   </head>
   
   <body>
      
      <?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
    

        $v="";
        $e="";


        $email = $_SESSION["email_id"];
        $passw = $_SESSION["passwd"];
		$user_name = $_SESSION["username"];
		$contact_no = $_SESSION["contact"];
        $veri_code = $_POST["code"];
        
        $host = 'localhost';
        $user = 'root';
        $pass = '';

         $link=mysqli_connect($host, $user, $pass,'userdata');

          


         $retval = "select * from random where ran_num = $veri_code";

          $res = mysqli_query($link,$retval);
		  
		  while($temp=mysqli_fetch_assoc($res))
                { 
			
                    		$e = $temp['emailid'];
                                $v = $temp['ran_num'];
                                
                  }
         /* echo $v.'<br>';
          echo $e.'<br>';
          echo $email.'<br>';
          echo $passw.'<br>';
          echo $veri_code;*/
         if($v == $veri_code and $e == $email)
          {
              $sql2 = "INSERT INTO register (username,emailid,password,contact) VALUES ('$user_name','$email','$passw','$contact_no')";
              mysqli_query($link,$sql2);
                echo "Please Login";
				header("Location: index.php");
          }
          else
          {
             echo '<center><h2>'."You have entered something wrong".'</h2></center>';
           }

      ?>
      
   </body>
</html>						