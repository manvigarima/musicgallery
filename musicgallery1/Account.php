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
<script type="text/javascript">

$(document).ready(function(){

$('#regis').click(function(){
$('.userregister').fadeIn(1000);


});


$('#pwd1').keyup(function(){
var a=$('#pwd1').val().length;
//$('.epwd').text(a);
if(a<4){
$('.epwd').text("Weak");
}
else if(a<8){
$('.epwd').text("Good");
}
else{
$('.epwd').text("Strong");
}

});
});


function valid(){

if(userregister.pwd1.value == userregister.pwd2.value)
{

}
else
{
alert("password not match please confirm it");
}

}


</script>
</head>

<body background="images/back.png">
<?php include 'includes/header.php';?>

<div class="container">
	<div class="row">
	


<div class="userlogin">
<h2>USER LOGIN</h2>

<form name="userlogin" method="post" action="coustmerlogin.php"/>
<input type="text" name="uname" id="" placeholder="USER NAME" required/><BR/><br/>
<input type="password" name="upwd" id="" placeholder="USER PASSWORD" required/><BR/><br/>
<input type="submit" name="submit1" value="Login HERE">


<p><a href="#" id="frgt">Forget Password</a></p>
<li id="regis"><a herf="#" id="regs">Sign Up Here</a></li>
</form>

</div>




<div class="userregister">

<h2>Get Registered Here</h2>
<?php include'includes/db.php';
if(isset($_POST["submit"]))
{

$uid=uniqid();
$uname=$_POST["username"];

$password=$_POST["pwd1"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$sql="insert into registration(uid,username,password,email,mobile)values('$uid','$uname','$password','$email','$contact')";
$run=mysqli_query($conn,$sql);

header('location:Account.php');

}

?>


<form name="userregister" method="post"/>

<input type="text" name="username" id="username" placeholder="USERNAME"required><br/>


<input type="password" name="pwd1" id="pwd1" placeholder="ENTER PASSWORD" required><span class="epwd"></span><br/>

<input type="password" name="pwd2" id="pwd2" placeholder="RE-ENTER PASSWORD" required>
<br>

<input type="text" name="email" id="email" placeholder="ENTER EMAIL ID" required><br/>

<input type="text" name="contact" id="contact" placeholder="PHONE NUMBER" required><br/>


<input type="submit" name="submit" value="Register" onClick="valid()"/>


</div>
	</div>
</div>
</body>
</html>
<style>
	
.userlogin{
width:50%;
height:330px;
background:rgba(0,0,138,0);
margin-top:100px;
float:left;}



.userlogin form{
margin-left:200px;
}



.userlogin input[type=text]{
margin-top:50px;
width:230px;
height:60px;
border-radius:10px;
background:#003366;
color:white;
border:2px solid black;
text-align:center;
font-weight:bold;}



.userlogin input[type=password]{
width:230px;
height:60px;
border-radius:10px;
background:#003366;
color:white;
border:2px solid black;
font-weight:bold;
text-align:center;
font-weight:bold;}




.userlogin input[type=submit]{
height:30px;
border-radius:10px;
margin-top:10px;
margin-left:60px;
background:black;
color:white;
font-weight:bold;
border:2px solid black;
font-weight:bold;
cursor:pointer;}

.userlogin h2{
color:white;
margin-left:200px;
font-size:30px;
font-weight:bold;}


.userlogin p{
float:left;}

.userlogin p a{
color:white;
font-style:italic;
cursor:pointer;
}





.userlogin li{
margin-left:60px;
list-style:none;
margin-top:20px;}

.userlogin li a{
cursor:pointer;
text-decoration:none;
color:white;
font-size:20px;
font-weight:bold;}













.userregister{
width:35%;
height:480px;
background:rgba(0,0,138,0);
margin-top:30px;
border-bottom:2px solid white;
float:right;
margin-right:100px;
display:none;}


.userregister h2{
color:white;
margin-left:130px;
font-weight:normal;}



.userregister  form{
margin-left:100px;
margin-top:20px;
padding:10px;}



.userregister input[type=text]{
height:45px;
width:230px;
border-radius:10px;
background:#003366;
color:white;
border:2px solid black;
text-align:center;
font-weight:bold;}



.userregister input[type=password]{
height:45px;
width:230px;
border-radius:10px;
background:#003366;
color:white;
border:2px solid black;
text-align:center;
font-weight:bold;}



.userregister input[type=radio]{
height:18px;
}

.userregister input[type=submit]{
margin-left:120px;
margin-top:10px;
width:130px;
height:50px;
background:black;
border:2px solid black;
border-radius:10px;
color:white;
font-size:20px;
font-weight:bold;}

#frgt{color:#FFFFFF;}
#regs{color:#FFFFFF;}

.epwd{
color:white;
font-style:italic;}
</style>

