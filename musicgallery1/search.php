<html>
<head>
<title>music gallery</title>
<link href="css/front.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

$('.slider1').cycle('scrollLeft');

$(".fancybox").fancybox();
});
</script>
</head>

<body>
<?php include 'includes/header.php';?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
				<p style="font-size:24px;">
				<?php 
				include'includes/db.php';
				$search=$_GET['search']; 
				echo "Search result for '$search'" ;
				?>
		<table border="1" class="table-responsive" align="center" width="100%" style="margin-top:50px;">
		<thead style=" font-size:25px; color:#000000; font-weight:bold; font-family:'Courier New', Courier, monospace;">
		<th style="text-align:center">SrNo</th>
		<th style="text-align:center">SONG NAME</th>
		<th style="text-align:center">ARTIST</th>
		<th style="text-align:center">PLAY</th>
		<th style="text-align:center">DOWNLOAD</th>
		
		</thead>
		<?php
if(!empty($_GET['search']))
{
include'includes/db.php';
$i=0;
$search=$_GET['search'];
$sql="select * from songs where song_name like '%$search%' or song_des like '%$search%' or song_artist like '%$search%'";
$run=mysqli_query($conn,$sql);
while($c=mysqli_fetch_array($run)){
$i++;?>

		<tbody style="font-size:25px; font-weight:bold; font-family:'Times New Roman', Times, serif; text-align:center; color:#ca0065;">
		
		<tr height="70">
		<td><?php echo $i;?></td>
		<td><?php echo $c['song_name'];?></td>
		<td><?php echo $c['song_artist'];?></td>
		<td><a target="_blank" href="play-song.php?uid=<?php echo $c['uid'];?>" class="btn btn-lg btn-primary">PLAY<span class="glyphicon glyphicon-asterisk"></span></a></td>
		<td><a href="download.php?uid=<?php echo $c['uid'];?>" class="btn btn-lg btn-success">Download</a></td>
		
		</tr>
		
		</tbody>
		<?php }}?>
		
		</table>




				
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>