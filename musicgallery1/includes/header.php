
<div class="container-fluid">
	<div class="row" style="background:black; z-index:99;">
	<div class="col-md-12">
		<div  class="col-md-4" style="background:rgba(0,0,0,0);">
		<A href="index.php"><h1 id="heading1"><u>M<s>U</s>sicality</u></h1></A>
		</div><!-----col-md-3 close------>
		
		
		<div  class="col-md-7"  style="background:black;">
		<ul class="nav nav-tabs nav-justified" id="list1">
		<li class="active"><a style=" background:black; color:#db0080;" href="index.php">Home</a></li>
		<li class="dropdown-menu-right">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#">Category<span class="caret"></span></a>
		<ul class="dropdown-menu" id="list-dropdown">
		<li><a href="hindi-songs.php">BOLLYWOOD SONGS</a></li>
		<li><a href="english-songs.php">HOLLYWOOD SONGS</a></li>
		<li><a href="punjabi-songs.php">PUNJABI SONGS</a></li>
		<li><a href="disco.php">PARTY SONGS</a></li>
		</ul>
	

		</li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="contact_us.php">Contact</a></li>
		<li><a href="Account.php">Account</a></li>
		</ul>
		</div>
		
			<div class="col-md-1" style="background:black; height:70px;">
			<?php 
				include 'includes/db.php';
				session_start();
				if(isset($_SESSION['uname']))
				{
				
			?>
				<P style="margin-top:35px; color:#FF00FF;">HELLO-<?php echo $_SESSION['uname'];?></P>
				<a href="logout.php"><input type="submit" name="Logout" value="LogOut" style="height:20px;" id="log"></a>
				<?php }?>				
			</div><!----col-md-1 close-->
		</div>
	</div><!----row close--->
</div><!---container fluid close--->
