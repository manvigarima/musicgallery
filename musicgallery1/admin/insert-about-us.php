<html>
<head>

<title>about  us info of musicality</title>
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
					<h3  id="home2">CATEGORY</h3>
					</div><!--slider close--->
					<div class="enquiry1">
					<ul class="nav nav-stacked">
					<li><a href="insert-category.php">Insert Category</a></li>
					<li><a href="view-all-category.php">Category List</a></li>
					
					</ul>
					</div><!---enquiry1 close-->
				
				
					
				
					<div class="enquiry">
					<h3  id="home3">SONGS</h3>
					</div><!--slider close--->
					<div class="enquiry2">
					<ul class="nav nav-stacked">
					<li><a href="insert-songs.php">Insert Songs</a></li>
					<li><a href="view-all-songs.php">Songs List</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
				
				
					<div class="enquiry">
					<h3  id="home4">ALBUMS</h3>
					</div><!--slider close--->
					<div class="enquiry3">
					<ul class="nav nav-stacked">
					<li><a href="insert-about-us.php">Insert Album</a></li>
					<li><a href="view-about-us.php">View Albums</a></li>
					
					</ul>
					</div><!---enquiry2 close-->
				
				
				
				
					<div class="enquiry">
					<h3  id="home5">ABOUT US</h3>
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
				
				
				<h2 style="text-align:center; font-size:30px; font-family:'Courier New', Courier, monospace; font-weight:bold; margin-top:30px;">INSERT SONGS</h2>
				
				<table border="1" class="table-responsive" align="center" width="70%" cellpadding="20" cellspacing="10" style="margin-top:30px;">
				
				<thead style=" color:white;background:#480000; height:40px;">
				<th style="text-align:center;">FIELDS</th>
				<th style="text-align:center;">ENTER</th>
				</thead>
				
				<form name="f4" method="post" action="action-insert-about-us-detail.php" enctype="multipart/form-data">
				<tbody style="font:17px; text-align:center;">
				<tr style="height:50px;">
				<td>ENTER SHORT:-</td>
				<td><input type="text" name="a1" required></td>
				</tr>
				
				<tr style="height:50px;">
				<td>ENTER FULL:-</td>
				<td><textarea name="full" required></textarea></td>
				</tr>
				
				
				<tr style="height:50px;">
				<td>ENETER IMAGE</td>
				<td><input type="file" name="file" required></td>
				</tr>
				
				
				
				
				<tr style="height:50px;">
				<td colspan="2"><input type="submit" name="submit" value="LOAD"></td>
				</tr>
				
				</tbody>
				</form>
				</table>
				
				
				
				
				
				
				</div>
				<!--col-md-7 close-->
				
		
	</div><!--row close--->
	
	
</div><!---container fluid-->


</body>
</html>
