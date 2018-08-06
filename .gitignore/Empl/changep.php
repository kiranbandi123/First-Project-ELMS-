<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['emplogin'])==0)
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
    $sql ="SELECT Password FROM tail WHERE EmailId=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tail set Password=:newpassword where EmailId=:username";
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
        <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/premium/png-512/avatar-boss-ceo-chief-male-man-officer-3a130e64fffeaa3f-512x512.png" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
     
        
        <!-- Styles -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="signup.css" rel="stylesheet" type="text/css"/>
                <script src="scroll.js" type="text/javascript"></script>

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
html {
    height: 100%;
}

body {
    background-size: cover;
    height: 100%;
}
body {
    margin:0;
    padding:0;
    position:relative;
    background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV98Ph1lz5BNw5aT23t4VnRD769w1aGJG50Jng1TF1eh6WirfmOg) no-repeat;
    background-size:cover;
}

.k ul li
{
	display:inline;
	list-style-type:none;
}
.k
{
	margin-left:50%;
	margin-top:10%;
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
<img src="data:image/png;base64,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" style="width:80px; height:5em; margin-top:5%;">
                    <?php 
$eid=$_SESSION['eid'];
$sql = "SELECT FirstName,LastName from  tblemployees where id=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
                                <p><b><?php echo htmlentities($result->FirstName." ".$result->LastName);?></b></p>
                         <?php }} ?>
<!-- main nav-bar -->

 <div class="k left-sidebar-hover"><ul>
       <li> <div  class="col-sm-3"><a href="leave.php" >APPLY LEAVE</a></div></li>
        <li><div  class="col-sm-3"><a href="profile.php" >VIEW PROFILE</a></div></li>
        <li><div  class="col-sm-3"><a href="leave-history.php" >LEAVE HISTORY</a></div></li>
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
