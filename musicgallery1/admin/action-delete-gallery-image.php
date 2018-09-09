<?php
include'includes/db.php';
$a=$_GET['uid'];

$sql="delete from gallery where uid='$a'";
$run=mysql_query($sql);
if($run)
{
header('location:insert-gallery-images.php?img=deleted');
}
else{echo"nonon";}


?>