<html>
<head>
<title>English SONGS CONTENT</title>
<link href="css/songs_content.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$('.change').cycle('fade');

});

</script>


</head>

<body>
<div class="container-fluid">
	<div class="row" style="background:black; z-index:99;">
	<div class="col-md-12">
		<div  class="col-md-4" style="background:black;">
		<h1 id="heading1"><u>M<s>U</s>sicality</u></h1>
		</div><!-----col-md-3 close------>
		
		
		<div  class="col-md-7"  style="background:black;">
		<ul class="nav nav-tabs nav-justified" id="list1">
		<li class="active"><a style="background:black; cursor:pointer; color:#db0080;" href="index.php">Home</a></li>
		<li class="dropdown-menu-right">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#">Category<span class="caret"></span></a>
		<ul class="dropdown-menu" id="list-dropdown">
		<li><a href="hindi-songs.php">HINDI SONGS</a></li>
		<li><a href="english-songs.php">ENGLISH SONGS</a></li>
		<li><a href="punjabi-song.php">PUNJABI SONGS</a></li>
		<li><a href="disco.php">DANCING SONGS</a></li>
		
		
		</ul>
	

		</li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="contact_us.php">Contact</a></li>
		
		</ul>
		</div>
		<div class="col-md-1" style="background:black; height:70px;"></div><!----col-md-4 close-->
		</div>
	</div><!----row close--->
</div><!---container fluid close--->



<!-------image section---------->

	<div class="row">
		<div class="col-md-12">
		
				<div class="section section2"></div>
		
		
		</div><!----col-md-12 close--->
	</div><!---row close-->

<!-------image section----close------>




<div class="row" style="margin-top:30px;">
	<div class="col-md-12">
		
		<h2 style="text-align:center; font-size:40px; font-weight:bold; font-family:'Courier New', Courier, monospace; color:#CA0065;"><u>DESCRIPTION ABOUT SONGS</u></h2>
		
		<div class="col-md-7" style="margin-top:130px;">
		
		<p style="text-align:justify; font-size:20px; text-align:center; ">Lyrics are words that make up a song usually consisting of verses and choruses. The writer of lyrics is a lyricist. The words to an extended musical composition such as an opera are, however, usually known as a "libretto" and their writer, as a "librettist". The meaning of lyrics can either be explicit or implicit. Some lyrics are abstract, almost unintelligible, and, in such cases, their explication emphasizes form, articulation, meter, and symmetry of expression. Rappers can also create lyrics (often with a variation of rhyming words) that are meant to be spoken rhythmically rather than sung.</p><br>
<br>
<br>

		<p style="text-align:justify; font-size:20px; text-align:center; ">Lyrics are words that make up a song usually consistingulation, meter, and symmetry of expression. Rappers can also create lyrics (often with a variation of rhyming words) that are meant to be spoken rhythmically rather than sung.</p>
		
		
		</div>
		<!--===================================col-md-7 close==========================--->
		
		
		
		<div class="col-md-5" style="margin-top:100px;">
				<div class="change">
			<img class="img-responsive img-circle" src="images/671a5e367df09fb1a5300b6058f73fa9.gif">
		<img class="img-responsive img-circle"  src="images/rtryu.gif">
		
				</div>
		</div><!--===========col-md-5 close==============--->
		
		
		
		
		
		
		
	</div><!---col-md-12 close--->
</div><!---row close---->





<div class="row" style="margin-top:50px;">

	<div class="col-md-12">
		<div class="sectionaa section1">
				
				<div class="row">
					<div class="col-md-12" style="margin-top:60px;">
					
						<div class="col-md-1"></div><!--=====col-md-2 close=============--->
						
						
		<div class="col-md-10">
		<h2 style="text-align:center; font-size:50px; font-weight:bold; font-family:'Courier New', Courier, monospace; color:#CA0065;"><u>PARTY SONGS LIST</u></h2>
		
		<table border="1" class="table-responsive" align="center" width="100%" style="margin-top:50px;">
		<thead style=" font-size:25px; color:white; font-weight:bold; font-family:'Courier New', Courier, monospace;">
		<th style="text-align:center">SrNo</th>
		<th style="text-align:center">SONG NAME</th>
		<th style="text-align:center">ARTIST</th>
		<th style="text-align:center">PLAY</th>
		<th style="text-align:center">DOWNLOAD</th>
		
		</thead>
		<?php
		include'includes/db.php';
		$i=0;
		$sql="select * from songs where category='party'";
		$run=mysql_query($sql);
		while($c=mysql_fetch_array($run)){
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
		
		<?php }?>
		</table>
		<br/>
		<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


		</div>
		<!--===================================col-md-7 close==========================--->
		
						
						
				<div class="col-md-1"></div><!--======col-m,d-2 cxlose=================------->
						
										
						
					</div><!--==============col-md-12 inner clos===========================---->

				</div><!--==============row inner clos===========================---->
		
		
		
		</div><!--=================col-md-12 close===============================--->
		
	</div><!--======================row close=====---->




</div>



			
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
		
		<input type="submit" class="form-control" name="insert" id="submit2" value="Submit">
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
