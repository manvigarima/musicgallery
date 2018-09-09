<html>
<head>
<title>Admin Panel</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$('#regis').click(function(){
$('#firstlog').slideUp(500);
$('#seclog').slideDown(700);
$('#regis').hide();
$('#headr2').hide();
$('#headr').fadeIn(800);
})

})

</script>

</head>

<body>

<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
	<h2 id="heading" style="margin-top:50px;">Welcome to <u>ADMIN</u> Panel</h2>
	</div>
	<!--col-md 12 close--->
  </div>
</div><!---container f close-->



<div class="container" style="margin-top:100px;">
		<div class="col-md-4"></div>
		<!--col md 3 close-->
		<div class="col-md-4">
		<h3 id="headr" style="color:black; font-family:'Courier New', Courier, monospace; font-weight:bold; text-align:center; font-size:30px;">REGISTER AS ADMIN</h3>
		<h3 id="headr2" style="color:black; font-family:'Courier New', Courier, monospace; font-weight:bold; text-align:center; font-size:30px;"> ADMIN LOGIN</h3>
		
			<div class="form-group" style=" margin-top:40px;" id="firstlog">
			<form name="f1" method="post" action="admin-registration.php">
	<input type="text" id="username" class="form-control" name="username" placeholder="ENTER THE USERNAME"><br/><br/>
	<input type="password" id="password" class="form-control" name="password" placeholder="ENTER THE PASSWORD"><br/><br/>
<input type="submit" name="submit" class="form-control" value="SUBMIT">
	</form>
		  </div><!---form close-->
		  
		  
		  <div class="form-group" id="seclog">
		  <form name="f4" method="post" action="">
		  <input type="text" class="form-control" name="ruser" placeholder="USERNAME"/><br>
		<input type="password" class="form-control" name="rpwd" placeholder="PASSWORD"/><br>
		<input type="password" class="form-control" name="cpwd" placeholder="CONFIRM PASSWORD"/><br>
		<input type="submit" class="form-control" name="rsub" value="SUBMIT"/>
		
		  
		  
		  </form>
		  </div><!----==form grp close===---->
		  
		  
		  <p style="color:#930000; font-size:12px; font-style:italic; text-align:right; font-weight:bold; cursor:pointer;" id="regis">Register a New ADMIN</p>		  
		</div>
		<!--col md 6 close--->
		<div class="col-md-4"></div>
		<!--col md 3 close-->
		
</div><!--container close-->



</body>
</html>
<?php

include'includes/db.php';
if(isset($_POST["rsub"])){
$uid=uniqid();
$zz=$_POST["ruser"];
$pp=$_POST["rpwd"];
$dd=$_POST["cpwd"];
if($pp==$dd)
{

$sql="insert into admin_details(uid,username,pass,repass)values('$uid','$zz','$pp','$dd')";
$run=mysql_query($sql);
echo'<script>alert("sucessfull registered");</script>';

}
else
{
echo '<script> alert("password not match");</script>';
 }

}



?>
