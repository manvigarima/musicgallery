<?php

include'includes/db.php';
$id=$_GET['uid'];
$query="select * from songs where uid='$id'";
$run=mysqli_query($conn,$query);
if($rr=mysqli_fetch_array($run))
{
$song=$rr['song_file'];
header('content-Disposition: attachment; filename='.$song.'');
header('content-type='.filesize($song));
readfile($song);
}






?>