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

<div class="section section1">
	<h1 style="color:#9A4E4E; font-family:'Courier New', Courier, monospace;
			font-weight:bold; position:absolute; margin-top:10%; margin-left:50%;">POPULAR <s>MUSIC</s> GALlERY</h1>
			
			<form name="f1" method="get" action="search.php">
			<p style="font-size:24px; color:#FFFFFF;">
<input type="search" name="search" id="u2" placeholder="Type keyword" style="margin-left:10px; opacity:0.7; color:#000000;">Search Song</p>

</form>
			</div>
			
			
		<div class="row" style="background:white;">
			<div class="col-md-12">
				<h2 style="text-align:center; margin-top:20px;color:#6F6F6F; font-weight:bold; font-family:'Courier New', Courier, monospace; font-size:40px;"><u>ABOUT US</u></h2>
					<div class="col-md-6" style="margin-top:50px;">
						<h2 style=" color:red;text-align:center; font-weight:bold; font-style:italic;">WELCOME TO MUSICALITY</h2>
				<?php
				include'includes/db.php';
				$sql="select * from about_us";
				$run=mysqli_query($conn,$sql);
				if($c=mysqli_fetch_array($run))
				{?>
					<p style="margin-top:100px; color:#484848; font-style:italic; text-align:justify; margin-left:40px; font-size:26px;"><?php echo $c['short'];?></p>
				<!-- Trigger the modal with a button -->
						<button type="button" style="margin-top:50px; margin-left:120px;" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">READ MORE</button>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
  							<div class="modal-dialog">
   							 <!-- Modal content-->
   								 <div class="modal-content">
     								 <div class="modal-header">
        								<button type="button" class="close" data-dismiss="modal">&times;</button>
        								<h3 style="text-align:center; font-size:30px; font-weight:bold; font-family:'Courier New', Courier, monospace;" class="modal-title">ABOUT US</h3>
      								</div><!-- header modal close -->
      								<div class="modal-body">
										<img src="admin/images/<?php echo $c['image'];?>" class="img-responsive" style="width:1200px;">
										<p id="p1" style="font-size:20px; font-style:italic;"><?php echo $c['full'];?></p><br/>
								     </div>
      								<div class="modal-footer">
        								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      								</div>
   								 </div>
 							 </div>
						</div><!----modelll close------>
				<?php }?>
					</div><!---col md- 6 close------->		
			
				<div class="col-md-6" style="margin-top:50px;">
				<img class="img-responsive" align="left" style="margin-left:40px;" src="images/a1.jpg">
				<img src="images/a3.jpg" align="left" class="img-responsive" style=" margin-left:40px;margin-top:30px;">
				<img src="images/a4.jpg" align="left" class="img-responsive" style="margin-left:40px;">
				<img src="images/a2.jpg" align="left" class="img-responsive" style="margin-left:40px; margin-top:40px;">
				</div>
			</div><!----col-md 12------>
		</div><!----row close---->
	<div class="section section2">
		<div class="row">
			<div class="col-md-12">
				<h2 style=" text-align:center; margin-top:45px;color:white; font-weight:bold;font-size:50px; font-style:italic;">Featured Vedios</h2>
					<div class="col-md-3"></div><!---col-md-3 close---->
					<div class="col-md-6">	
		 				<div class="embed-responsive embed-responsive-4by3">
  							<iframe class="embed-responsive-item" src=""></iframe>
						</div>
					</div><!---col-md-6 close---->
					<div class="col-md-3"></div><!---col-md-3 close---->
			</div><!---col-md-12 close--->
		</div><!---row close--->
	</div><!--sec section2 close------>
		<div class="row" style="background:white;">
			<div class="col-md-12">
				<h2 style=" text-align:center; margin-top:30px;color:#5B5B5B; font-family:'Courier New', Courier, monospace; font-weight:bold; font-size:40px;"><u>SERVICES WE DO...!</u>
				</h2>
				<div class="col-md-7" style="margin-top:140px;">
					<div class="row">
						<div class="col-md-1"></div><!--col-md-1 close----->
						<div class="col-md-5">
							<h2 style=" color:blue;text-align:left; font-style:italic; margin-left:50px;">
								<span style="margin-left:50px;" class="glyphicon glyphicon-envelope"></span>
									<br/>Professional</h2>
							<p style="text-align:justify; font-size:20px; color:#717171;">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
							<h2 style=" color:blue;text-align:left; font-style:italic; margin-left:50px;"><span style="margin-left:50px;" class="glyphicon glyphicon-asterisk"></span><br/>Narating</h2>
							<p style="text-align:justify; font-size:20px; color:#717171;">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
						</div><!---col-md-5 close----->
						<div class="col-md-1"></div><!--col-md-1 close----->
					<div class="col-md-5">
					<h2 style=" color:blue; font-style:italic;text-align:left; margin-left:50px;">
						<span style="margin-left:50px;" class="	glyphicon glyphicon-minus"></span>
						<br/>Recording</h2>
						<p style="text-align:justify; font-size:20px; color:#717171;">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
					<h2 style="color:blue; font-style:italic;text-align:left; margin-left:50px;">
						<span style="margin-left:50px;" class="glyphicon glyphicon-plus"></span>
						<br/>Sound</h2>
						<p style="text-align:justify; font-size:20px; color:#717171;">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div><!----col-md-5 close----->
			</div><!---row close----->
		</div><!--col-md-7 close---->
		<div class="col-md-5" style="margin-top:70px;">
			<img src="images/a1.jpg" class="img-responsive center-block" style=" height:580px;width:500px;">
			<br/><br><br>
		</div><!--col-md-5 close---->
	</div><!--col-md-12 close------>
</div><!--row close------>
			
			<!--======================slider section start =========================-->
			<div class="section section3">
			
		<div class="row">
			<div class="col-md-12">
			<h2 style="text-align:center; margin-top:50px;color:white; font-size:40px; font-style:italic; font-weight:bold;">REVIEWS</h2>
			
				<div class="col-md-3" ></div><!---col-md-2 close=====-->
				<div class="col-md-6" id="hello" style="margin-top:100px;">
		
		<div class="slider1" style="border-radius:50px;height:auto;box-shadow:5px 5px 10px 10px white; background:rgba(0,0,0,0); width:100%;">
<p style=" padding:20px;  background-color:rgba(0,0,0,0);color:white;font-size:20px;font-style:italic; text-align:justify;">
" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet egestas erat.
"<br/>
<img src="images/3.png" class="img-responsive center-block" style="height:130px; border:2px solid white; border-radius:50px; width:150px; margin-top:30px;" ></p>
				
				
<p style=" padding:20px;color:white; font-size:20px; font-style:italic; text-align:justify;">" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet egestas erat.
"<br/><img src="images/2.png" class="img-responsive center-block" style="height:130px; border:2px solid white; border-radius:50px; width:150px; margin-top:30px;" ></p>
				
			   </div>
				</div><!---col-md-6 close--->
				<div class="col-md-3" ></div><!---col-md-3 close--->
				
			</div><!---col-md-12 close-->		
		</div><!---row close--->
			
			</div><!--section 3 close---->
			
			
<!---==============================gallery section start===============================------>

			
		
<div class="row">
	<div class="container">
	<div class="col-md-12"><br /><br />


	<h2 style="text-align:center; font-size:40px; font-family:'Courier New', Courier, monospace; font-weight:bold;">!!.OUR GALLERY.!!</h2><br /><br />


		<?php
		include'includes/db.php';
		$sql="select * from gallery order by rand() limit 4";
		$run=mysqli_query($conn,$sql);
		while($cc=mysqli_fetch_array($run)){
		?>

		<div class="col-md-6">
		<div class="thumbnail">
		<a href="admin/images/<?php echo $cc['image_file'];?>" class="fancybox" rel="group">
 <img src="admin/images/<?php echo $cc['image_file'];?>" style="width:100%;height:300px;" />
		</a>
		</div>
		<br>

		</div><!---====col-md- 4close==========--->


		<?php }?>
	
		

	</div><!---====col-md-12 close===========--->
	</div>
</div><!--====row close======--->




<!---==============================gallery section close===============================------>
	
			
			
			
			
	<!--section start-->
						<div class="sectionaa section4">
						<div class="row">
							<div class="col-md-12">
							<h2 style="text-align:center; color:white; font-size:35px; font-weight:bold; margin-top:50px;">OUR ARTISTS</h2>
							
					<div class="col-md-1"></div><!----col-md-1 close---->
							
					
					
					<div class="col-md-3" style="margin-top:100px;">
					<?php 
					include'includes/db.php';
					$sql2="select * from artist where id='1'";
					$run2=mysqli_query($conn,$sql2);
					if($row=mysqli_fetch_array($run2)){
					?>			
			<p style="text-align:center; color:white; font-size:20px; font-style:italic;">
				<img style="width:120px; height:120px;" src="admin/images/<?php echo $row['artist_image'];?>" class="img-responsive center-block">
		<?php echo $row['intro'];?>	</p>
								
								
								<?php } ?>
								</div><!---col-md-3 close---->
								
								
								
					<div class="col-md-4" style="margin-top:110px;">
					<?php 
					include'includes/db.php';
					$sql2="select * from artist where id='2'";
					$run2=mysqli_query($conn,$sql2);
					if($row=mysqli_fetch_array($run2)){
					?>			
			<p style="text-align:center; color:white; font-size:20px; font-style:italic;">
				<img style="width:120px; height:120px;" src="admin/images/<?php echo $row['artist_image'];?>" class="img-responsive center-block">
		<?php echo $row['intro'];?>	</p>
								
								
								<?php } ?>
										
								</div><!---col-md-4 close---->
							
								
					<div class="col-md-3" style="margin-top:100px;">
					<?php 
					include'includes/db.php';
					$sql2="select * from artist where id='3'";
					$run2=mysqli_query($conn,$sql2);
					if($row=mysqli_fetch_array($run2)){
					?>			
			<p style="text-align:center; color:white; font-size:20px; font-style:italic;">
				<img style="width:120px; height:120px;" src="admin/images/<?php echo $row['artist_image'];?>" class="img-responsive center-block">
		<?php echo $row['intro'];?>	</p>
								
								
								<?php } ?>
								</div><!---col-md-4 close---->
								
								
								<div class="col-md-1"></div><!------col-md-1 close--->
								
								
							</div><!----col-md-12---->
						</div><!--row close------>
						
						</div>
	<!--============================section closee====================================-->

			
			
			
<!--================================footeer start====================================-->


<div class="row" style="background:black; margin-top:0px;">
	<div class="col-md-12">
		<div class="container" style=" margin-top:80px;background:#191919;">
			<div class="row">
				<?php 
				include'includes/db.php';
				$sql3="select * from contact_us";
				$run3=mysqli_query($conn,$sql3);
				if($row3=mysqli_fetch_array($run3)){
				?>
				<div class="col-md-4">
				<h2 style="text-align:center; color:#ffc168; font-size:30px;">Call Us</h2>
				<p id="call-us"><b>Office Phone no.:</b><?php echo $row3['office_phone'];?></p>
				<p id="call-us"><b>Mobile</b>:<?php echo $row3['moble_phone'];?></p>
				</div>
				<div class="col-md-4">
				<h2 style="text-align:center; color:#ffc168; font-size:30px;">Address</h2>
				<p id="call-us"><?php echo $row3['address'];?></p>
				</div>
				<div class="col-md-4">
				<h2 style="text-align:center; color:#ffc168; font-size:30px;">Message</h2>
				<p id="call-us"><b>Email</b>:<?php echo $row3['email'];?></p>
				<p id="call-us"><b>Enquiry</b>:<?php echo $row3['enquiry_mail'];?></p>
				
				</div><!---col-md-4 cdlose------>
				<?php }?>
			</div><!--row close---->
		</div><!---container close------>
		
		
	<div class="container" style="background:black; margin-top:50px;">
		<div class="row">
			<div class="col-md-4">
			<h1 style="text-align:center;color:#ffc168; font-size:40px;">MUSICALITY</h1>
			</div><!---col-md-4 close------>
			<div class="col-md-4">
			<h2 style="text-align:center; font-size:30px; color:#ffc168;">----About Us</h2>
			<p id="call-us"> The Music Gallery of Fine Art, is located within and operated by the owners of the acclaimed independent Canadian record label, </p>
    	

			
			</div><!--col-md-4 close--->
			<div class="col-md-4">
	<h2 style="text-align:center; font-size:30px; color:#ffc168;">---Subscribe Now</h2>
		<div class="form-group">
		
		<form name="f5" method="post" action="insert-newsletter-database.php">
		<input type="email" class="form-control" name="subscribe" id="sub1" placeholder="EMAIL" required><br/>
		
		<input type="submit" name="insert" id="submit2" value="Submit">
		</form>
		</div><!--form grp close--->
		
		
			
			</div><!---col-md-4 closer---->
			
		</div><!---row close----->
	</div><!---container close---->	


	<div class="row" style="margin-top:60px;">
		<div class="col-md-12">
			<div class="col-md-5"></div>
			<div class="col-md-7">
			<p style="font-size:15px; color:#ffc168; text-align:right;">© 2017 New Shop . All rights reserved | Design by MANVI OJHA</p>
			</div>
			
		
		</div><!---col-md-12 close---->
	</div><!--row close--->




			
		
	</div><!---col-md-12 close---->
</div><!---row close--->



<!--================================footeer  close====================================--->
	
	
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>


<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.7"></script>


</body>
</html>
