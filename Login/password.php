<?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = "localhost";
        $user = "root";
        $pass = "";

         $link=mysqli_connect($host, $user, $pass,'userdata');

          

        $email = $_GET['emailid']; 

        $data = "";


       $sql = "select * from register where emailid = '$email'";

       $resu = mysqli_query($link,$sql);
       
       $count = 0;

       while($temp = mysqli_fetch_assoc($resu))
       {
            $count ++;

        }

       if ($count > 0)
       {
            $data  = "Email already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
?>