<?php
include'includes/db.php';
$a=$_GET['uid'];
$sql="delete from contact_us where uid='$a'";
$run=mysql_query($sql);
if($run)
{header('location:view-contact-us.php');}
else
{echo"not ok";}
?>