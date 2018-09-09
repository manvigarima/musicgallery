<?php
include'includes/db.php';
if(isset($_POST["upload"])){
$uid=uniqid();
$cate=$_POST["cats"];
$name=$_POST["sname"];
$artist=$_POST["aname"];
$des=$_POST["detail"];
$lyrics=$_POST["lyrics"];
$names=$_FILES['sfile']['name'];
$tmp_name=$_FILES['sfile']['tmp_name'];

move_uploaded_file($tmp_name,"songs/".$names);

$sql="insert into songs(uid,song_name,song_artist,song_des,song_file,category,lyrics)values('$uid','$name','$artist','$des','$names','$cate','$lyrics')";

$run=mysql_query($sql);
if($run){
header("location:insert-songs.php?msg=song inserted");
}
else{echo"o0h shit";
}

}


?>