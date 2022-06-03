<html>
<head><title>Recover Password</title>
</head>

</html>
<?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
    

        $v="";
        $e="";


        $email = $_SESSION["email_id"];
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
              
				header("Location: newpassword.php");
          }
          else
          {
             echo '<center><h2>'."You have entered something wrong, Retry again".'</h2></center>';
			 header("Refresh:5; url=index.php");
           }

      ?>