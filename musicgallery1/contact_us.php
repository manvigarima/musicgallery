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
			</div>




		
			<div class="row">
				<div class="col-md-12">
				
					<h2 style="text-align:center; font-size:40px; font-family:'Courier New', Courier, monospace; font-weight:bold; margin-top:40px;">CONTACT US..!</h2>
					
					
					<div class="col-md-2"></div><!---col-md-2 close--->
					
					
					<div class="col-md-8">
					<div class="form-group" style="font-size:18px; margin-top:60px;">
						<form name="f3" method="post" action="insert-query-database.php">
					Enter name:
			<input type="text" class="form-control" name="name" id="name" required/>
					<br>

					Enter Phone no.:
			<input type="text" class="form-control" name="phone" id="phone" required/>
					<br>

					Enter Email:
			<input type="text" class="form-control" name="emailid" id="emailid" required/>
					<br>

					Enter Subject:
			<input type="text" class="form-control" name="sub" id="sub" required/>
					<br>

					Message:
					<textarea name="msg1" class="form-control" id="mdg1" required></textarea>
					<br><br>
					<input type="submit" name="submit" id="submit" class="form-control" value="Submit">
					
							</form>
					</div><!----form grp close---->
					</div><!-----col-md-8 close------->
					
					<div class="col-md-2"></div><!----col-md-2 close---->
				</div><!---col-md-12w close-->
			</div><!--row close------>
			
			
			
			
			
						
<!--================================footeer start====================================--->


<div class="row" style="background:black; margin-top:0px;">
	<div class="col-md-12">
		<div class="container" style=" margin-top:80px;background:#191919;">
			<div class="row">
				<?php 
				include'includes/db.php';
				$sql3="select * from contact_us";
				$run3=mysql_query($sql3);
				if($row3=mysql_fetch_array($run3)){
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
	



</body>
</html>