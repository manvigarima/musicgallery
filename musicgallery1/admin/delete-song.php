<?php

include'includes/db.php';

$a=$_GET['uid'];
$sql="delete from songs where uid='$a'";
$run=mysql_query($sql);

header('location:view-all-songs.php');

?>