<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['add']))
{
$empid=$_POST['empcode'];
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];   
$email=$_POST['email']; 
$password=md5($_POST['password']); 
$gender=$_POST['gender']; 
$dob=$_POST['dob']; 
$department=$_POST['department']; 
$address=$_POST['address']; 
$city=$_POST['city']; 
$country=$_POST['country']; 
$mobileno=$_POST['mobileno']; 
$status=1;

$sql="INSERT INTO tail(EmpId,FirstName,LastName,EmailId,Password,Gender,Dob,Department,Address,City,Country,Phonenumber,Status) 
VALUES(:empid,:fname,:lname,:email,:password,:gender,:dob,:department,:address,:city,:country,:mobileno,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Employee record added Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

    ?>
    
<!DOCTYPE html>
<html>
<head>
	<style>
	.yes{
		margin-bottom:5%;
	}
button[type=submit]{
	background-color:#00675E;
	color:white;
}
button.ch {
			background-color:#00675E;}
.ch a{
	color:white;
}

.ch a:hover{
	color:white;
text-decoration:none;
}
	button[type=submit]: hover{
	background-color:#4BBEDB;
	
}
button.ch:hover {
			background-color:#4BBEDB;
		}
#gender{
width:100%;
}
#empcode{
width:140%;
}
	
	
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
	 body{
		  background-image:url(https://previews.123rf.com/images/elosa/elosa1303/elosa130300011/18239686-a-light-blue-and-white-soft-texture-or-background.jpg);
		  background-repeat:no-repeat;
	background-size:cover;  
	  }
	  small{
		  color:red;
		  }
		  
	</style>
<script src="bootstrap.js"></script>
<script src="jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFLo1qh3zTmckY3-_1EsIbKAJ3XWxvRC6SSmMUHt9i0eh7uvx" type="image/x-icon">


<link rel="stylesheet" type="text/css"  href="bootstrap.css">
<link rel="stylesheet" type="text/css"  href="signup.css">
<title>SignUp</title>
</head>
<body>
	
	<!---- kjjhopol --->

	
     <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<!------ihouihik--->

<div class="header"></div>

<div class="main col-lg-6 "><br>
<h1>Form Details</h1>
<br>
<form method="post" name="addemp">

	
<div class="input-field col m6 s12">
<label for="firstName"><small>*</small>&nbsp;First name</label>
<input id="firstName" name="firstName" type="text" class="form-control" required>
</div>
<br>
<div class="input-field col m6 s12">
<label for="lastName"><small>*</small>&nbsp;Last name</label>
<input id="lastName" name="lastName" type="text" autocomplete="off" class="form-control" required>
</div>

<div class="input-field col s12">
<label for="email"><small>*</small>&nbsp;Email</label>
<input  name="email" type="email" id="email" onBlur="checkAvailabilityEmailid()" class="form-control" autocomplete="off" required>
<span id="emailid-availability" style="font-size:12px;"></span> 
</div>
<script>
	function valid()
	{
		if
(document.addemp.password.value!=document.addemp.confirmpassword.value)
{
	alert("password and confirm password are mismatch");
document.addemp.confirmpassword.focus();
return false;
}
return true;
}
</script>

<div class="input-field col s12">
<label for="password"><small>*</small>&nbsp;Password</label>
<input id="password" name="password" type="password" class="form-control" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div>
<div class="input-field col s12">
<label for="confirm"><small>*</small>&nbsp;Confirm password</label>
<input id="confirm" name="confirmpassword" type="password" autocomplete="off"  class="form-control" required>
</div>
	<div class="col-sm6 pull-left" ><br>
<label for="empcode"><small>*</small>&nbsp;Employee Code(Must be unique)</label>
<input  name="empcode" id="empcode" onBlur="checkAvailabilityEmpid()" class="form-control " type="text" autocomplete="off" required>
<span id="empid-availability" style="font-size:12px;"></span> </div>&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="col-sm6 push-right" style="margin-left:50%;">

	<label for="gender"><small>*</small>&nbsp;Gender</label>
<select  name="gender"id="gender" autocomplete="off" class="form-control" >	
<option value="">Gender...</option>                                          
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select></div>



	<div class="col-sm6 pull-left" style="width:45%;"><br>
	<label for="department"><small>*</small>&nbsp;Department</label>
<select  name="department" autocomplete="off"class="form-control">
<option value="">Department...</option>
<?php $sql = "SELECT DepartmentName from tbldepartments";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                                            
<option value="<?php echo htmlentities($result->DepartmentName);?>"><?php echo htmlentities($result->DepartmentName);?></option>
<?php }} ?>
</select>
 </div>&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="col-sm6 push-right" style="margin-left:50%;">

<label for="birthdate"><small>*</small>&nbsp;Birthdate</label>
<input id="birthdate" name="dob" type="date" class="datepicker form-control" autocomplete="off" >
</div>
<br>



<div class="input-field col m6 s12">
<label for="address"><small>*</small>&nbsp;Address</label>
<input id="address" name="address" type="text" autocomplete="off" class="form-control" required>
</div>

<div class="input-field col m6 s12">
<label for="city"><small>*</small>&nbsp;City/Town</label>
<input id="city" name="city" type="text" autocomplete="off" class="form-control" required>
 </div>
   
<div class="input-field col m6 s12">
<label for="country"><small>*</small>&nbsp;Country</label>
<input id="country" name="country" type="text" autocomplete="off" class="form-control" required>
</div>

                                                            
<div class="input-field col s12">
<label for="phone"><small>*</small>&nbsp;Mobile number</label>
<input id="phone" name="mobileno" type="tel" maxlength="10" autocomplete="off" class="form-control" required>
 </div>
 <br><br>
 <div class="yes">
<div class="tablerow">
			<div class="col-lg-6 res">
<button type="submit" name="add" onclick="return valid();" id="add" class="ch form-control"><b>Register</b></button>

		</div></form>
		<div class="col-lg-6">		<button  class="ch form-control"><b><a href="index.php" >LogIn</a></b></button></p>
</div>
			</div>
			</div></div>


</html>

