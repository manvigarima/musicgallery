<?php
include'includes/db.php';
if(isset($_POST["submit"])){
$uid=uniqid();
$sh=$_POST["a1"];
$fu=$_POST["full"];
$img=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$target="images/";
move_uploaded_file($tmp_name,$target.$img);

$sql="insert into about_us(uid,short,full,image)values('$uid','$sh','$fu','$img')";
$run=mysql_query($sql);


if($run){
header('location:insert-about-us.php');}
else{
echo"noo shitman";}


}


?>