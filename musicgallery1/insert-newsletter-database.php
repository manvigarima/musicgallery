<?php
include'includes/db.php';
if(isset($_POST["insert"])){
$uid=uniqid();
$email=$_POST["subscribe"];

$sql="insert into newsletter(uid,email)values('$uid','$email')";
$run=mysql_query($sql);
header('location:index.php');

}


?>