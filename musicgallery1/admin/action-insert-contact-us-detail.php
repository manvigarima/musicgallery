<?php
include'includes/db.php';
if(isset($_POST["submit"])){
$uid=uniqid();
$office=$_POST["onum"];
$mobile=$_POST["num"];
$email=$_POST["email"];
$ee=$_POST["eemail"];
$ad=$_POST["add"];

$sql="insert into contact_us
(uid,office_phone,moble_phone,email,enquiry_mail,address)values
('$uid','$office','$mobile','$email','$ee','$ad')";
$run=mysql_query($sql);
if($run)
{
header('location:insert-contact-us.php');}
else{echo"nooot nononon";}
}


?>