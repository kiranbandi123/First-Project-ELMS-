<?php
session_start();
include('../config.php');
if(isset($_POST['signin'])){
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql="SELECT UserName, Password from admin where UserName=:uname and Password=:password";
$query=$dbh->prepare($sql);
$query->bindParam(':uname',$uname,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0){
	$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'>document.location='changepassword.php';</script>";
}
else{
	echo "<script>alert('Invalid User');</script>";
}
}
?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<title>ADMIN</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFLo1qh3zTmckY3-_1EsIbKAJ3XWxvRC6SSmMUHt9i0eh7uvx" type="image/x-icon">

</head>
<style>
input[type=text], input[type=password] 
{
width:40%;
}
input[type=submit]{
width:40%;
background-color:#009587;
color:white;
}
input[type=submit]:hover{
	background-color:#4BBEDB;

}

	body{
    background-image: url(https://demo.tutorialzine.com/2010/07/making-slick-mobileapp-website-jquery-css/img/bokeh.jpg);
   background-repeat: no-repeat;
      
    background-size:cover;
     
    
}

.main{
	margin-top:15%;
	margin-left:30%;
}
h1{
	color:green;
	margin-left:5%;
}
.pos{
	position:absolute;
	top:10%;
	right:1%;
}
.pos a{
	color:black;
	text-decoration:none;
	    font-weight: bold;

}
.pos a:hover{
	color:#fff;
    font-weight: bold;

}
</style>
<body>
<main class="main">
	<form method="post"><h1>Admin Login</h1>
<label for="username"><strong>User Name:</strong></label><input type="text" name="username" class="form-control"><br>
<label for="username"><strong>Password:</strong></label> <input id="myInput" type="password" class="cps validate form-control pwd" name="password"   class="validate" autocomplete="off" required> 
<input type="checkbox" onclick="myFunction()"><span>view password</span><br><br>
<input type="submit" name="signin" class="form-control" value="LOGIN">
</form></main>
<div  class="pos col-sm-3"><a href="../" >User Login</a></div>

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
</body>
</html>
