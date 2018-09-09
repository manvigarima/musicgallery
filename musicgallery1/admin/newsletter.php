<html>
<head>

<title>NEWSLETTER musicality</title>
<link href="css/dashboard.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/selector.js"></script>
</head>

<body>

<div class="container-fluid" >
	<div class="row">
		<div class="col-md-12" style="background:#480000;">
			<div class="col-md-3" ></div><!---col-md-3-->
			<div class="col-md-6" >
			<h2 style="text-align:center; color:white;">MUSICALITY Admin Panel</h2>			
			</div><!---col-md-6 close-->
			<div class="col-md-3" ></div><!---col-md-3-->
		</div>
		<!--col-md-12 close--->
	</div><!--row close-->
	
	
	<div class="row" >
		
				<div class="col-md-3" style="background:#480000;">
				<div class="vertical">
					<div class="home">
					
					<a href="dashboard.php"><h3 id="home">HOME</h3></a>
					</div><!---home close--->
					<div class="enquiry">
					<a href="enquery.php"><h3 id="home1">ENQUERY</h3></a>
					</div><!--enquiry CLOSE--->
					
				
				
					
					<div class="enquiry">
					<a href="newsletter.php"><h3 id="home1">NEWSLETTER</h3></a>
					</div><!--enauiry close---->
					
					
					<div class="enquiry">
					<h3 id="home6">CONTACT US</h3>
					</div><!--enquiry close---->
						<div class="enquiry5">
					<ul class="nav nav-stacked">
					<li><a href="insert-contact-us.php">Insert Detail</a></li>
					<li><a href="view-contact-us.php">View Detail</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
				
					
					<div class="enquiry">
					<h3 id="home2">CATEGORY</h3>
					</div><!--slider close--->
					<div class="enquiry1">
					<ul class="nav nav-stacked">
					<li><a href="insert-category.php">Insert Category</a></li>
					<li><a href="view-all-category.php">Category List</a></li>
					
					</ul>
					</div><!---enquiry1 close-->
				
				
					
				
					<div class="enquiry">
					<h3 id="home3">SONGS</h3>
					</div><!--slider close--->
					<div class="enquiry2">
					<ul class="nav nav-stacked">
					<li><a href="insert-songs.php">Insert Songs</a></li>
					<li><a href="view-all-songs.php">Songs List</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
				
				
					<div class="enquiry">
					<h3 id="home4">ALBUMS</h3>
					</div><!--slider close--->
					<div class="enquiry3">
					<ul class="nav nav-stacked">
					<li><a href="insert-about-us.php">Insert Album</a></li>
					<li><a href="view-about-us.php">View Albums</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
				
				
					<div class="enquiry">
					<h3 id="home5">ABOUT US</h3>
					</div><!--slider close--->
					<div class="enquiry4">
					<ul class="nav nav-stacked">
					<li><a href="insert-about-us.php">Insert Detail</a></li>
					<li><a href="view-about-us.php">View Detail</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
						<div class="enquiry">
					<h3 ><a href="insert-gallery-images.php" id="home7">GALLERY IMAGES</a></h3>
					</div><!--slider close--->
				
					
					
				</div><!--vertocalclose-->
				
				
				</div><!--col-md-5 close-->
				<div class="col-md-9">
				
								
				<h2 style="text-align:center; font-size:35px; margin-top:30px;  font-weight:bold; font-family:'Courier New', Courier, monospace;">SUBSCRIBERS</h2>
			
	
	
	<table border="1" class="table-responsive" width="55%" align="center" cellpadding="10"
	 style="margin-top:30px;">
				
				<thead style="font-size:22px; font-weight:bold; font-family:'Courier New', Courier, monospace; height:40px; background:#480000; color:white;">
				<th style=" text-align:center;">SR. No</th>
				<th style=" text-align:center;">EMAIL</th>
				<th style=" text-align:center;">DELETE</th>
				
				</thead>
				
				<?php
				include'includes/db.php';
				$i=0;
				$sql="select * from newsletter";
				$run=mysql_query($sql);
				while($c=mysql_fetch_array($run)){
				
				$i++;
				?>
				
				
				<tbody style="text-align:center; font-size:18px;">
				<tr style="height:50px;">
				<td><?php echo $i;?></td>
				<td><?php echo $c['email'];?></td>
				<td><a href="action-delete-newsletter.php?uid=<?php echo $c['uid'];?>" class="btn btn-sm btn-danger">DELETE</a></td>
				</tr></tbody>
				
				
				<?php }?>
				
				</table>
				
				
			
				</div><!--col-md-7 close-->
				
		
	</div><!--row close--->
	
	
</div><!---container fluid-->


</body>
</html>
