<?php
session_start();
error_reporting(0);
include('../config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
// Code for change password 
if(isset($_POST['change']))
    {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$username=$_SESSION['emplogin'];
    $sql ="SELECT Password FROM admin WHERE EmailId=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update admin set Password=:newpassword where EmailId=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";    
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Change Password</title>
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFLo1qh3zTmckY3-_1EsIbKAJ3XWxvRC6SSmMUHt9i0eh7uvx" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">

        
        <!-- Styles -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="scroll.js" type="text/javascript"></script>

        <link href="signup.css" rel="stylesheet" type="text/css"/>
        <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    .ps, .cps, .chps{
		width:70%;
		} 
			  html {
    height: 100%;
}

body {
    background-size: cover;
    height: 70%;
}
		body{
    background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6PF8JGKiqNyyea1Djs1p0welEl01qnjvhLKvzuyPOSwe9fkIQ);
    background-repeat: no-repeat;
       background-position: center;
    background-size: cover;
    height: 68%;
    }
		  
		main
{
	margin-left:10%;
}
button,.ch{
	width:35.5%;
	background-color:#00675E;
	color:white;
}
.ch a{
	color:white;
	text-decoration:none;

}
button,.ch:hover{
	
	background-color:#4BBEDB;
	
}
.ch1{
			width:23.5%;
			position:absolute;
			top:10%;
			right:10%;
}
ch1 a:hover{
color:#4BBEDB;
}
.ch1 a{
font-weight:bold;
	text-decoration:none;
}
.heads{
	margin-left:25%;
}

.k ul li
{
	display:inline;
	list-style-type:none;
}
.k
{
	margin-left:10%;
	margin-top:15%;
}
	body {
  overflow-x: hidden;
}
.hidden-thing {
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}	
		 </style>
    </head>
    <body><div style="margin-left:5%;">
                    
<!-- main nav-bar -->

 <div class="k left-sidebar-hover"><ul>
       <li> <div  class="col-sm-3"><a href="approvedleave-history.php" >APPROVED LEAVES</a></div></li>
        <li><div  class="col-sm-3"><a href="pending-leavehistory.php" >PENDING LEAVES</a></div></li>
                <li><div  class="col-sm-3"><a href="logout.php" >LOGOUT</a></div></li>

</ul>
        </div>
        
<!-- completed -->
   <div class="sidebar-profile-info">

                        </div>
</div>


            <main class="mn-inner"><br>
                <div class="row">
                    <div class="col s12">
                      <div class="heads page-title"><i><strong>Change Pasword</strong></i></div>
                    </div><br>
                    <div class="col s12 m12 l6">
                        <div class="card">
                            <div class="card-content">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                         
                                <div class="row">
                                    <form class="col s12" name="chngpwd" method="post">
                                          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                                        <div class="row">
                                            <div class="input-field col s12">
<input id="password" type="password"class="ps validate form-control" autocomplete="off" name="password"  required>
                                                <label for="password">Current Password</label>
                                            </div><br>
  <div class="input-field col s12">
<input id="myInput" type="password" class="cps validate form-control pwd" name="newpassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
 title="It must contain one number and one upper and one lower and atleast 8 or more"  class="validate" autocomplete="off" required> 
<input type="checkbox" onclick="myFunction()"><label for="password">New Password</label>

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
                                            </div>
                                            <br>

<div class="input-field col s12">
<input id="password" type="password" class="chps validate form-control" name="confirmpassword" class="validate" autocomplete="off" required>
 <label for="password">Confirm Password</label>
</div>

<br>
<div class="input-field col s12"><p>
<button type="submit" name="change" class="ch validate form-control col-sm-10"  onclick="return valid();">Change</button>
<button type="reset" class="ch form-control col-sm-6">Reset</button>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
	$(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});

</script>

</div>



                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                     
             
                   
                    </div>
                
                </div>
            </main>

        </div>
       
        <!-- Javascripts -->

        
    </body>
</html>
<?php } ?> 
