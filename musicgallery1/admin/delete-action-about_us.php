<?php
include'includes/db.php';

$a=$_GET['uid'];
$sql="delete from about_us where uid='$a'";
$rr=mysql_query($sql);
if($rr)
{
header('location:view-about-us.php');
}
else{echo"nonoono";}

?>