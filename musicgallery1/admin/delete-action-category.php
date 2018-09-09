<?php
include'includes/db.php';
$a=$_GET['uid'];
$sql="delete from category where uid='$a'";
$run=mysql_query($sql);
if($run)
{header('location:view-all-category.php');}
else
{echo"not ok";}
?>