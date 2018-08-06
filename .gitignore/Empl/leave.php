<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
if(isset($_POST['apply']))
{
$empid=$_SESSION['eid'];
 $leavetype=$_POST['leavetype'];
$fromdate=$_POST['fromdate'];  
$todate=$_POST['todate'];
$description=$_POST['description'];  
$status=0;
$isread=0;
if($fromdate > $todate){
                $error=" ToDate should be greater than FromDate ";
           }
$sql="INSERT INTO tblleaves(LeaveType,ToDate,FromDate,Description,Status,IsRead,empid) VALUES(:leavetype,:fromdate,:todate,:description,:status,:isread,:empid)";
$query = $dbh->prepare($sql);
$query->bindParam(':leavetype',$leavetype,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Leave applied successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Apply Leave</title>  
        <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/premium/png-512/avatar-boss-ceo-chief-male-man-officer-3a130e64fffeaa3f-512x512.png" type="image/x-icon">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="scroll.js" type="text/javascript"></script>

  <style>

	  html {
    height: 100%;
}

body {
    background-size: cover;
    height: 100%;
}
body {
   
    position:relative;
    background:url(https://cdn.wallpapersafari.com/81/18/WewaSt.jpg) no-repeat;
    background-size:cover;
}
	  
	  main{
		  margin-left:10%;
	  }
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    border-right: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    width:40%;
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
        border-right: 4px solid #5cb85c;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        width:40%;

}
.leavetype
{
	width:50%;
margin-left:12%;
}
    .fst{
		width:30%;
		float:left;
	}
	.lst{
		width:30%;
		float:right;
		margin-right:30%;
	}
	.tex{
	margin-left:-1%;
	width:72%;
	}
	#apply
{
	width:50%;
margin-left:15%;
	background-color:#00675E;
	color:white;
}
		#apply:hover
{
		background-color:#4BBEDB;

}
.ch{
	background-color:#00675E;
	color:white;
}
	.ch:hover{
				background-color:#4BBEDB;
}
.ch a{

	color:white;
	text-decoration:none;
	font-weight:bold;
}
.fast{
		width:100%;
		float:left;
}
	.last{
		width:30%;
		margin-top:-3%;
		float:right;
		margin-left:-2%;
	}	
	form{
		margin-top:10%;
	}
	
  nav a
{
	margin-left:10%;
	width:10%;
}
nav{
	margin-top:5%;
}    
	
	body {
  overflow-x: hidden;
  overflow-y: hidden;
}
.hidden-thing {
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
	.mn-inner{
		margin-left:10%;
	}
	
	    </style>
 


    </head>
    <body>
<!-- main nav-bar -->

 <nav>
     <a href="changep.php" >CHANGE PASSWORD</a>
      <a href="profile.php" >VIEW PROFILE</a>
  <a href="leave-history.php" >LEAVE HISTORY</a>
       <a href="logout.php" >LOGOUT</a></div></li>

        </nav>
        
<!-- completed -->            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                    </div>
                    <div class="col s12 m12 l8">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="addemp">
                                    <div>
                                    <h3 style="margin-left:30%;"><b>Apply for Leave</b></h3>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m12">
                                                        <div class="row">
     <?php if($error){?><div class="errorWrap"><strong>ERROR </strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


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
 <div class="input-field">
<select  name="leavetype" autocomplete="off" class="leavetype form-control">
<option value="">Select leave type...</option>
<?php $sql = "SELECT  LeaveType from tblleavetype";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                                            
<option value="<?php echo htmlentities($result->LeaveType);?>"><?php echo htmlentities($result->LeaveType);?></option>
<?php }} ?>
</select>
</div>
<br>
<div class="row">
<div class="fst input-field">
<label for="fromdate">From  Date</label>
<input placeholder="" id="mask1" name="fromdate" class=" form-control datepicker" type="date" data-inputmask="'alias': 'date'" required>
</div>
<div class="lst input-field">
<label for="todate">To Date</label>
<input placeholder="" id="mask1" name="todate" class="form-control datepicker" type="date" data-inputmask="'alias': 'date'" required>
</div></div><br>
<div class="tex input-field">
<label for="birthdate">Description</label>    

<textarea id="textarea1" name="description" class="materialize-textarea form-control" length="300" required></textarea>
</div>
</div><br>
   <div class="fast input-field">
   <button type="submit" name="apply" id="apply" class=" form-control"><b>Apply</b></button></div>

                                                </div>
                                            </div>
                                        </section>
                                     
                                    
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
       
                
    </body>
</html>
<?php } ?> 

<!--- next --->


                    <!-- hai -->
