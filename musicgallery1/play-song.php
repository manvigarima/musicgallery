<html>
<head>
<title>Playing <?php echo "song"; ?></title>
<link href="css/songs_content.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>

<body>

<?php include 'includes/header.php';?>

<div class="container">
  <div class="row">
				<?php
					include'includes/db.php';
					$a=$_GET['uid'];
					$sql="select * from songs where uid='$a'";
					$run=mysqli_query($conn,$sql);
					if($c=mysqli_fetch_array($run))
					{
					?>
		<div class="col-md-12" style="height:auto;">
			<h2 style="text-align:center; background:#db0080; color:white;"><?php echo $c['song_name'];?> <a style="color:#FFFFFF;" href="download.php?uid=<?php echo $c['uid'];?>">DOWNLOAD</a> mp3</h2>
			<div class="row">
				<div class="col-md-4" id="lyrics" style="background:black;">
					<h3 style="font-family:Algerian; color:#db0080; text-align:center;">Lyrics</h3>
						<p  id="pp" style="background:white; padding:20px; text-align:justify;">
						<?php 	
						if(!empty($c['lyrics']))
						{
						 echo $c['lyrics'];
						 ?>
						 <style type="text/css">
							#lyrics{height:auto;}
							#pp{height:auto;}
							</style>
						<?php  }
						 else{
						 	echo "LYRICS NOT FOUND"; ?>
							<style type="text/css">
							#lyrics{height:526px;}
							#pp{height:450px;}
							</style>
							
						<?php  }
						
						?>
					</p>
				</div><!-- col-md-4 close -->
				<div class="col-md-8" style="background:#000000; height:526px;"><!-- col-md-8 outter-->
					<div class="row" style="background:">
						<div class="col-md-4" style="height:300px;">
							<p style="color:#FFFFFF;">Ad by google</p>
							<p style="margin-top:35px;">
								<img src="images/g3.jpg" style="width:100%; height:200px;">
							</p>
						</div><!-- col-md-4 close -->
						<div class="col-md-8" style="height:300px;"><!-- col-md-8 inner-->
							<h3 style="font-family:Algerian; color:#FFFFFF; text-align:center;">Descriptions</h3>
							<div class="col-md-12 col-sm-12" style="border:2px thick black; border:2px inset black; height:200px;">	
								<div class="s_name" style="border-bottom:inset;">
									<p>Name: <i style="font-family:Algerian; color:#db0080;"><?php echo $c['song_name'];?></i></p>
								</div>
								<div class="s_name" style="border-bottom:inset;">
									<p>Release:<i style="font-family:Algerian; color:#db0080;">23/july/2017</i></p>
								</div>
								<div class="s_name" style="border-bottom:inset;">
									<p>Artist:<i style="font-family:Algerian; color:#db0080;"><?php echo $c['song_artist'];?></i></p>
								</div>
								<div class="s_name" style="border-bottom:inset;">
									<p>Detail:<i style="font-family:Algerian; color:#db0080;"><?php echo $c['song_des'];?></i></p>
								</div>
							</div><!-- col-md-12 col-sm-12 close -->
						</div><!-- col-md-8 inner close -->
						<div class="col-md-12" style=" background:">							
							<img src="images/giphy1.gif" style="width:100%; height:75px;">
							<embed src="admin/songs/<?php echo $c['song_file'];?>" class="music"></embed>
						</div><!-- col-md-12 close -->
					</div><!-- row close -->
				</div><!--col-md-8 outter close -->
			</div><!--row close -->
		</div><!-- col-md-12 close -->		
	</div><!-- row close -->

	<div class="row" style="margin-top:20px;">
	
	  <div class="col-md-12" style="background:black; height:auto; width:100%;">
	  	<h3 style="background:#db0080; color:#FFFFFF;">SONGS YOU WOULD LIKE</h3>
			<?php 
			include'includes/db.php';
					$a=$_GET['uid'];
					$sql="select * from songs where uid='$a'";
					$run=mysqli_query($conn,$sql);
					if($c=mysqli_fetch_array($run))
					{
						$cat=$c['category'];
							$sql1="select * from songs where category='$cat'";
							$run1=mysqli_query($conn,$sql1);
							while($d=mysqli_fetch_array($run1))
							{			
			?>

			<div class="col-md-2 hov" style="padding:5px; margin:15px; color:#db0080; margin-bottom:40px; height:auto;">
			
			<p><a href="play-song.php?uid=<?php echo $d['uid'];?>">
				<img src="images/a3.jpg" class="img-responsive" style="height:140px; width:100%;"></a>
			</p>
			<p><?php echo $d['song_name'];?></p>
			<p>Artist</p>
			<a style="color:#db0080;" href="download.php?uid=<?php echo $d['uid'];?>"><p>Download</p></a>
			
			</div>
			<?php }}?>
		
		</div><!-- col-md-12 close -->
		<?php  }?>
	</div><!--row close -->
</div><!--container close--->
</body>
</html>

<style type="text/css">
.music{width:100%;}
.hov:hover{ box-shadow:2px 2px 2px 2px #db0080;}
.s_name{color:#FFFFFF;}
</style>