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
});
</script>
</head>

<body>
<?php include 'includes/header.php';?>




	
			<div class="section section1">
			<h1 style="color:#9A4E4E; font-family:'Courier New', Courier, monospace;
			font-weight:bold; position:absolute; margin-top:10%; margin-left:50%;">POPULAR <s>MUSIC</s> GALlERY</h1>
			</div>





<div class="row">
	<div class="col-md-12"><br /><br />


	<h2 style="text-align:center; font-size:40px; font-family:'Courier New', Courier, monospace; font-weight:bold;">!!.OUR GALLERY.!!</h2><br /><br />


		<?php
		include'includes/db.php';
		$sql="select * from gallery";
		$run=mysqli_query($conn,$sql);
		while($cc=mysqli_fetch_array($run)){
		?>

		<div class="col-md-4">
		<div class="thumbnail">
		<a href="admin/images/<?php echo $cc['image_file'];?>" class="fancybox" rel="group">
 <img src="admin/images/<?php echo $cc['image_file'];?>" style="width:100%;height:300px;" />
		</a>
		</div>
		</div><!---====col-md- 4close==========-->


		<?php }?>
		


	</div><!--====col-md-12 close===========-->
</div><!--====row close======-->


			
<!--=====================================================================================================================================
														footer start
======================================================================================================================================-->

<div class="row" style="background:black; margin-top:50px;">
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
				
				</div><!---col-md-4 cdlose-->
				<?php }?>
			</div><!--row close-->
		</div><!---container close-->
		
		
	<div class="container" style="background:black; margin-top:50px;">
		<div class="row">
			<div class="col-md-4">
			<h1 style="text-align:center;color:#ffc168; font-size:40px;">MUSICALITY</h1>
			</div><!---col-md-4 close-->
			<div class="col-md-4">
			<h2 style="text-align:center; font-size:30px; color:#ffc168;">----About Us</h2>
			<p id="call-us"> The Music Gallery of Fine Art, is located within and operated by the owners of the acclaimed independent Canadian record label, </p>
    	

			
			</div><!--col-md-4 close-->
			<div class="col-md-4">
	<h2 style="text-align:center; font-size:30px; color:#ffc168;"><!--Subscribe Now</h2>
		<div class="form-group">
		
		<form name="f5" method="post" action="insert-newsletter-database.php">
		<input type="email" class="form-control" name="subscribe" id="sub1" placeholder="EMAIL" required><br/>
		
		<input type="submit" name="insert" id="submit2" value="Submit">
		</form>
		</div><!--form grp close-->
		
		
			
			</div><!---col-md-4 closer-->
			
		</div><!---row close-->
	</div><!---container close-->	


	<div class="row" style="margin-top:60px;">
		<div class="col-md-12">
			<div class="col-md-5"></div>
			<div class="col-md-7">
			<p style="font-size:15px; color:#ffc168; text-align:right;">© 2017 New Shop . All rights reserved | Design by MANVI OJHA</p>
			</div>
			
		
		</div><!---col-md-12 close-->
	</div><!--row close-->




			
		
	</div><!---col-md-12 close---->
</div><!---row close--->



<!--================================footeer  close====================================--->
	


<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>


<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.7"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>



</body>
</html>

<style type="text/css">

.thumbnail{
width:100%;
overflow:hidden;}

img{
-webkit-transition:all 0.5s ease;}

img hover{
transform:scale(1.3);}

</style>


