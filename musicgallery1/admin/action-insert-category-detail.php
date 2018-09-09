<?php
include'includes/db.php';

if(isset($_POST["insert"])){
$uid=uniqid();
$cats=$_POST["a1"];

$sql="insert into category(uid,category)values('$uid','$cats')";
$run=mysql_query($sql);

if($run)
{
header('location:insert-category.php');
}
else{echo"nnnnnn";}
}


?>