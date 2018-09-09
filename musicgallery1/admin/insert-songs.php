<html>
<head>
<meta charset="utf-8">
<title> INSERT SONGS IN  musicality</title>
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
					<a href="contact-us.php"><h3 id="home1">CONTACT US</h3></a>
					</div><!--enquiry close---->
					
				
				
					
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
				<h2 style="text-align:center; font-size:30px; font-family:'Courier New', Courier, monospace; font-weight:bold; margin-top:30px;">INSERT SONGS</h2>
				
				<table class="table-responsive" border="1" class="table-responsive" align="center" width="70%" cellpadding="20" cellspacing="10" style="margin-top:30px;">
				
				<thead style=" color:white;background:#480000; height:40px;">
				<th style="text-align:center;">FIELDS</th>
				<th style="text-align:center;">ENTER</th>
				</thead>
				
				<form name="f3" method="post" action="action-insert-songs.php" enctype="multipart/form-data">
				<tbody style="text-align:center; font-size:18px;font-style:italic;">
				
				<tr style="height:50px;">
				<td>SELECT CATEGORY</td>
				<td><select name="cats">
				<option value="">SELECT ANY ONE</option>
				
				<?php
				 include'includes/db.php';
				 $sql="select * from category";
				 $run=mysql_query($sql);
				 while($c=mysql_fetch_array($run)){
				 ?>
				
				<option value="<?php echo $c['category'];?>"><?php echo $c['category'];?></option>
				<?php }?>
				</select></td>
				</tr>
				
				
				<tr style="height:50px;">
				<td>SONG NAME</td>
				<td><input type="text" name="sname" id="sname" required></td>
				</tr>
				
				<tr style="height:50px;">
				<td>ARTIST NAME</td>
				<td><input type="text" name="aname" id="aname" required></td>
				</tr>
				
				
				<tr style="height:50px;">
				<td>SONG DETAIL</td>
				<td><input type="text" name="detail" id="detail" required></td>
				</tr>
				<tr style="height:50px;">
				<td>SONG Lyrics</td>
				<td> <input type="text" name="lyrics" id="lyrics"></textarea></td>
				</tr>
				
				<tr style="height:50px;">
				<td>CHOOSE FILE</td>
				<td><input type="file" name="sfile" id="song" required></td>
				</tr>
				
				<tr style="height:60px;">
				<td colspan="2"><input type="submit" name="upload" value="Add/Upload"></td>
				</tr>
				
				
				
				</tbody>
				</form>
				
				</table>
				
				</div><!--col-md-7 close-->
				
		
	</div><!--row close--->
	
	
</div><!---container fluid-->


</body>
</html>
