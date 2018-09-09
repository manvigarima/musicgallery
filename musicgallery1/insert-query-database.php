<?php
include'includes/db.php';
if(isset($_POST["submit"])){
$uid=rand();
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["emailid"];
$subject=$_POST["sub"];
$mssg=$_POST["msg1"];

$sql="insert into query (uid,name,phone_no,email,subject,message)values('$uid','$name','$phone','$email','$subject','$mssg')";
$run=mysql_query($sql);
if($run){
header('location:contact_us.php');
}else{
echo"noooooooooooooo";}
}

?>