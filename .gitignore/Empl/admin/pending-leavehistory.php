<?php
session_start();
error_reporting(0);
include('../config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{



 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Approved Leave leaves </title>
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFLo1qh3zTmckY3-_1EsIbKAJ3XWxvRC6SSmMUHt9i0eh7uvx" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">

        
        <!-- Styles -->

<style>

body, html {
    height: 100%;
}
	body{
    background-image:url(http://wallpaperen.com/wp-content/uploads/2017/12/nice-white-website-background-white-and-gray-3d-paper-abstract-background-stock-image-white-website-background.jpg);
    background-repeat: no-repeat;
        background-position: center;
    background-size: cover;
    height: 60%; 

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
     #example{
	 margin-left:15%;
	 margin-top:05%;
	 }
	 .page-title{
	  margin-left:20%;
	 margin-top:15%;
	 color:;
	 font-weight:bold;
	 }
	 

nav a
{
	margin-left:10%;
	width:10%;
	margin-top:5%;
}
        </style>
    </head>
    <body>
     
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title"><h1><strong><i>Pending Leave History</i></strong></h1></div>
                    </div>
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                                                  <!-- main nav-bar -->

<nav>

     <a href="changepassword.php" >CHANGE PASSWORD</a>
    <a href="approvedleave-history.php" >APPROVED LEAVES</a>
               <a href="logout.php" >LOGOUT</a>

   </nav>
        
<!-- completed -->
                            <div class="card-content">
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
      
                                <table id="example" class="display responsive-table" border="1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="200">Employe Name</th>
                                            <th width="120">Leave Type</th>

                                             <th width="180">Posting Date</th>                 
                                            <th>Status</th>
                                            <th align="center">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody border="1">
<?php 
$status=0;
$sql = "SELECT tblleaves.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,tblleaves.LeaveType,tblleaves.PostingDate,tblleaves.Status from tblleaves join tblemployees on tblleaves.empid=tblemployees.id where tblleaves.Status=:status order by lid desc";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{         
      ?> 
                                       <tr>
                                            <td> <b><?php echo htmlentities($cnt);?></b></td>
                                              <td border="1"><a href="#?empid=<?php echo htmlentities($result->id);?>" 
                target="_blank"><?php echo htmlentities($result->FirstName." ".$result->LastName);?>(<?php echo htmlentities($result->EmpId);?>)</a></td>
                                            <td><?php echo htmlentities($result->LeaveType);?></td>
                                            <td><?php echo htmlentities($result->PostingDate);?></td>
                                                                       <td><?php $stats=$result->Status;
if($stats==1){
                                             ?>
                                                 <span style="color: green">Approved</span>
                                                 <?php } if($stats==2)  { ?>
                                                <span style="color: red">Not Approved</span>
                                                 <?php } if($stats==0)  { ?>
 <span style="color: blue">waiting for approval</span>
 <?php } ?>


                                             </td>

          <td>
<td border="1"><a href="leave-details.php?leaveid=<?php echo htmlentities($result->lid);?>" class="waves-effect waves-light btn blue m-b-xs"> 
View Details</a></td>
                                    </tr>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                </table>
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
