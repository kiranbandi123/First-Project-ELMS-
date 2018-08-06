<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['signin']))
{
	$uname=$_POST['username'];
	$password=md5($_POST['password']);
$sql="SELECT * FROM tail where EmailId=:uname and Password=:password";
$query=$dbh->prepare($sql);
$query->bindParam(':uname',$uname,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0){
foreach($results as $result){
	$status=$result->Status;
    $_SESSION['eid']=$result->id;	
}
if($status==0){
	$msg="Your account is Inactive";
}
else
{
	$_SESSION['emplogin']=$_POST['username'];
	echo "<script type='text/javascript'>
	document.location=  'changep.php';</script>";
}
}
else{
	echo "<script>alert('Invalid user');</script>";
}
}

?>


<!DOCTYPE html>
<html>
<link rel="icon" href="https://cdn.iconscout.com/public/images/icon/premium/png-512/avatar-boss-ceo-chief-male-man-officer-3a130e64fffeaa3f-512x512.png" type="image/x-icon">
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


		<style>
		input[type=submit]:hover{
	background-color:#4BBEDB;

}
body{
    background-image: url(https://thumbs.dreamstime.com/z/white-geometric-template-website-banner-business-card-invitation-35552413.jpg);
    background-repeat:no-repeat;
    width: 100%;
    background-size:cover;
     
    
}
button.pos {
position:absolute;
top:7%;
left:28%;
}
	.pos a{
		text-decoration:none;
color:black;
font-weight:bold;
border:none;
	}
	.pos a:hover
	{
				text-decoration:none;

		color:white;
font-weight:bold;
	}
	button.pos:hover{
	background-color:#4BBEDB;

	}
		</style>
		<link type="text/css" rel="stylesheet" href="./login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link type="text/css" rel="stylesheet" href="./bootstrap.css">
	<script type="text/javascript" href="bootstrap.js"></script>
	<script type="text/javascript" href="jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

	<title>Employee</title>
	</head><body>

	<div class="form">
				<img src="GYPSY.png" style="margin-top:-18%; width:40%; height:24em;">

<form method="post">
	<h2 class="heade"><b><strong>Employee Login</strong></b></h2>
Email Id:<input type="text" name="username" id="username" class="form-control">
<script type="text/javascript">
	$("#password").password('toggle');
</script>
<br><br>
<label for="username"><strong>Password:</strong></label> 
<input id="myInput" type="password" class="cps validate form-control pwd" name="password"    class="validate" autocomplete="off" required> 
<input type="checkbox" onclick="myFunction()"><span>view password</span>

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<br>
<br>
<br>
<p><input type="submit" name="signin" class="form-control col-lg-6" value="Login"></form>





<form action="signup.php">
    <input type="submit"class="form-control he" value="Register" />
</form>
</p>

<button  class="pos form-control col-sm-4"><a href="./admin" >Admin Login</a></button>

</div>

</body>
<!--- DIF --->



<!--- OTHER --->
</html>
