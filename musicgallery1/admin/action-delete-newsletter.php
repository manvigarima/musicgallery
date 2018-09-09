<?php
include'includes/db.php';

$a=$_GET['uid'];
$sql="delete from newsletter where uid='$a'";
$run=mysql_query($sql);

header('location:newsletter.php');
?>