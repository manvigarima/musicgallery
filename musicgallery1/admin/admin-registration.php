<?php

include'includes/db.php';
if(isset($_POST["submit"])){
$zz=$_POST["username"];
$pp=$_POST["password"];

$sql="select * from admin_details where username='$zz' and pass='$pp'";
$run=mysqli_query($conn,$sql);
if($cc=mysqli_fetch_array($run))
{
session_start();
$_SESSION["admin"]=$cc['username'];
header('location:dashboard.php');
}
else
{
echo"not valid";
 }
}
?>
