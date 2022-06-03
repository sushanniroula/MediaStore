<?php
$host="localhost";
$user="root";
$password="";
$link = mysqli_connect($host,$user,$password,'userdata');
session_start();
$email=$_SESSION["emailid"];
$sql1="DELETE FROM register WHERE emailid='$email'";
$sql2="DELETE FROM random WHERE emailid='$email'";
$sql="DELETE FROM images WHERE email='$email'";

$res=mysqli_query($link,$sql1);
$res1=mysqli_query($link,$sql2);
$res2=mysqli_query($link,$sql);

if($res&& $res1 && $res2){
	session_destroy();
echo "Your account has been successfully deleted.";
header ("refresh:3; url=../index.php");
}
//9814036759 katel daju
?>