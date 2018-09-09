<?php 
include "includes/db.php";
if(isset($_POST["submit1"]))
{
	$Uname=$_POST['uname'];
	$password=$_POST['upwd'];
	$sql="select * from registration where username='$Uname' and  password='$password'";
	$run=mysql_query($sql);

if($c=mysql_fetch_array($run))
{
session_start();
$_SESSION['uname']=$c['username'];
header('location:index.php');
}
else
{
header('location:Account.php');

}

}
?>
