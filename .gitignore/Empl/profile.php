<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];
if(isset($_POST['update']))
{

$fname=$_POST['firstName'];
$lname=$_POST['lastName'];   
$gender=$_POST['gender']; 
$dob=$_POST['dob']; 
$department=$_POST['department']; 
$address=$_POST['address']; 
$city=$_POST['city']; 
$country=$_POST['country']; 
$mobileno=$_POST['mobileno']; 
$sql="update tail set FirstName=:fname,LastName=:lname,Gender=:gender,Dob=:dob,Department=:department,Address=:address,City=:city,Country=:country,Phonenumber=:mobileno where EmailId=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$msg="Employee record updated Successfully";
}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Update Profile</title>
                <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/premium/png-512/avatar-boss-ceo-chief-male-man-officer-3a130e64fffeaa3f-512x512.png" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
form,.he{
	margin-left:10%;
}
  
	
#update
{
background-color:#009587;
	color:black;
}

  #update:hover{
	background-color:#4BBEDB;
	color:white;
	  
  }
  
  
  
.update{
	background-color:#009587;

}
.update a
{ 
	color:black;
	text-decoration:none;
	}

.update:hover{
	background-color:#4BBEDB;
	color:white;
	  
}
.update a:hover{
		color:white;

	
}
body{
    background-image: url(https://banner2.kisspng.com/20180129/yew/kisspng-iphone-4s-iphone-5s-upholstery-leather-quilted-white-background-5a6fe72de0eca6.3787773115172831179213.jpg);
   background-repeat: no-repeat;
      width:100%;
    background-size:cover;
     
    
}
	.k ul li
{
	display:inline;
	list-style-type:none;
}
.k
{
	margin-left:15%;
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
	
	  html {
    height: 100%;
}

body {
    background-size: cover;
    height: 70%;
}

        </style>




    </head>
    <body>
 
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="updatemp">
                                    <div>
                                        <h1 style="margin-left:25%; margin-top:5%; color:green;">Update Employee Info</h1>
                                        
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
       <li> <div  class="col-sm-3"><a href="changep.php" >CHANGE PASSWORD</a></div></li>
        <li><div  class="col-sm-3"><a href="leave.php" >APPLY LEAVE</a></div></li>
        <li><div  class="col-sm-3"><a href="leave-history.php" >LEAVE HISTORY</a></div></li>
        <li><div  class="col-sm-3"><a href="logout.php" >LOGOUT</a></div></li>

</ul>
        </div>
        
<!-- completed --> 
                                           <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m6">
                                                        <div class="row">
<?php 
$eid=$_SESSION['emplogin'];
$sql = "SELECT * from  tblemployees where EmailId=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
	
	
	
 <div class="input-field col-xs-10">
<label for="empcode">Employee Code</label>
<input  name="empcode" id="empcode" value="<?php echo htmlentities($result->EmpId);?>" class=" form-control" type="text" autocomplete="off" readonly required>
<span id="empid-availability" style="font-size:12px;"></span> 
</div><br><br><br>

<div class="">
<div class="col-xs-5">
<label for="firstName">First name</label>
<input id="firstName" name="firstName" value="<?php echo htmlentities($result->FirstName);?>"  class=" form-control "type="text" required>
</div>

<div class=" col-xs-5">
<label for="lastName">Last name </label>
<input id="lastName" name="lastName" value="<?php echo htmlentities($result->LastName);?>" class=" form-control " type="text" autocomplete="off" required>
</div></div>

<div class="col-xs-5">
<label for="email">Email</label>
<input  name="email" type="email" id="email" value="<?php echo htmlentities($result->EmailId);?>" class=" form-control" readonly autocomplete="off" required>
<span id="emailid-availability" style="font-size:12px;"></span> 
</div>

<div class="col-xs-5" >
<label for="phone">Mobile number</label>
<input id="phone" name="mobileno" type="tel" value="<?php echo htmlentities($result->Phonenumber);?>" class="form-control" 
 maxlength="9" autocomplete="off" required>
 </div>

</div>
</div>
                                                    

<div class="input-field col-xs-5"><label for="gender">Gender</label>
<select  name="gender" autocomplete="off" class="form-control">
<option value="<?php echo htmlentities($result->Gender);?>"><?php echo htmlentities($result->Gender);?>  </option>                                          
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
</div><div class="col-xs-5">
<label for="birthdate">Date of Birth</label>

<input id="birthdate" name="dob"  class="datepicker form-control" type="date" value="<?php echo htmlentities($result->Dob);?>" >
</div>

                                                    

<div class="input-field col-xs-5"><label for="department">Department</label>
<select  name="department" autocomplete="off" class="form-control">
<option value="<?php echo htmlentities($result->Department);?>"><?php echo htmlentities($result->Department);?></option>
<?php $sql = "SELECT DepartmentName from tbldepartments";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $resultt)
{   ?>                                            
<option value="<?php echo htmlentities($resultt->DepartmentName);?>"><?php echo htmlentities($resultt->DepartmentName);?></option>
<?php }} ?>
</select>
</div>

<div class="input-field col-xs-5">
<label for="address">Address</label>
<input id="address" name="address" type="text"  value="<?php echo htmlentities($result->Address);?>" autocomplete="off" class="form-control" required>
</div>

<div class="input-field col-xs-5">
<label for="city">City/Town</label>
<input id="city" name="city" type="text"  value="<?php echo htmlentities($result->City);?>" autocomplete="off"  class="form-control" required>
 </div>
   
<div class="input-field col-xs-5">
<label for="country">Country</label>
<input id="country" name="country" type="text"  value="<?php echo htmlentities($result->Country);?>" class="form-control" autocomplete="off" required>
</div>

                                                            

<?php }}?>
                                                     
<div class="input-field col-xs-10"><br>
<button type="submit" name="update"  id="update" class="form-control" >UPDATE</button>

</div>


                                                        </div>
                                                    </div>
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
