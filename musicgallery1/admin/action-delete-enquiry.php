<?php
include'includes/db.php';
$a=$_GET['uid'];

$sql="delete from query where uid='$a'";
$run=mysql_query($sql);
if($run)
{
header('location:enquery.php');
}
else{echo"NNNOj";}
?>