<?php
include'includes/db.php';
if(isset($_POST["intimg"])){
$uid=uniqid();
$image=$_FILES['file1']['name'];
$temp=$_FILES['file1']['tmp_name'];
$target="images/";
move_uploaded_file($temp,$target.$image);

$sql="insert into gallery(uid,image_file)values('$uid','$image')";
$run=mysql_query($sql);
if($run){
header('location:insert-gallery-images.php?img=inserted');}
else{
echo"goback";}

}


?>