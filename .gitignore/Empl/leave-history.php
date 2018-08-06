<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Leave History</title>
        <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/premium/png-512/avatar-boss-ceo-chief-male-man-officer-3a130e64fffeaa3f-512x512.png" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
    
        
        <!-- Styles -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.js"></script>
            
        <!-- Theme Styles -->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<style>
	body,html{
		
		height:100%;
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
  table
  {
	  margin-left:5%;
	  } 
	.display  tr th{
		  margin-left:5%;
		  }    
		  
		  body{
    background-image: url("https://www.pivotel.net/wp-content/uploads/2016/12/website-background.jpg");
   background-repeat: no-repeat;
      background-center;
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
	margin-bottom:5%;
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
    <body>
<div style="margin-left:5%;">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAMAAADUMSJqAAABKVBMVEX17uX////yzqUknPLmwZzmpCJFIij20qhlLDlVKjG+l37UsIxnMj9oMz6ibl78+/ixgWxiLD/pyqv59vEAlfHrqCC2flj79ezZjCH78eVkLz/Hlm+eyvPtw5bqwpmRWjfXlyblnwDr8/pAGSHgkR716tqZYTaIUjlSNTncvqDm3dY0AA8vAAA4BxTTo32wlHiOe2UADhcAAA/FqIgmJiYAAACsnprVy8WaiYc4MzBoTlDN4/jCubGkssN5qNY7nuvQvKmSrcqxtLpRqO9rtPKNwvRco+DY4Obv3MizzufFiCuxdjB5QzvqtV2ASjrnqz7swX0tABaAUE6DYlTltoNtTUVZDSGTcnOeeG1dHTDgo1zem0rBfCqpaTBDABTosnGGYGN7Z2ZpW03pGm8JAAAGsUlEQVRogZ3ZD1uaXBQAcESMCnkNESUTlEQrW27Vttpys5ZuVjpta+1ta9u7ff8P8Z4LiPw594I7z54mAj8Oh3uvF+AyqaKgqirnBXwspNuLS+FyWFRSHCEBp8jzc0jwmThT9vy/wwuVZDohfSqeIuvE7Cn4EjSDR/HCcjQJtDYYvmTa9OQRPLqbOGo5PWceND4FHiuJOrGs3HQyIzGBmPEjygFipYni8d3UmZWD0CxLc8KCY81aKB/VuSSbU0curmm5XKPhfrCsGZq7ysKRvFvGlICNx/ZYzlereXncvm5A/tPNZJ1j2urmDIqgadc7ipKX5TwE/FWUnWtNmybnzjHtYg5Kol2PFVmuKvLHertd/ygrVVlWxtfWJLHuATzeTgxC5+oKJLtz09C8aNzswGkodUtM0gN4zOaJ3ZAJ1CCXcx7gkwPK13cjjMfw2EaklWiPilwdNwKy5zfGVVl5tPUiMnbG8XgOpJVcK7LSjsou34bD3tj2tziuRvH4WAVFceybWNpu2D+qcvVRt7/Tyz7H44eHxHOya5NeaUVsXbd/QCOC/+7iJx3G4+uh4tpOXmlr0F4mBm/MpsEzaOgQdrua37F1u0UrDEdL3LBIUcZgz3g3Zn6L0WwSoI+dwpjxwgRxpNtPNA16DrQTg/djYhHems7gO+Puu60/Qn+y9W/I7gsc+eVRydXMtzUtYIM4mcLg6y2Ihm7XoT3qOtIcCz6OrGxBxWWlYc14Vtg6DAq2joxhqo/H13EtrVGVd7Qp0+Z/2R/lPHZF3apzaMUJ/qgojwmJ84Z9U4WehOGqhyOrAG/nq40c2+Z5Xa/m6yjOuTg+kdDG8jiXUBWe/6bDZjoKFBwcHTjVqQIlnyThpOjKd1xwcPS46oQ0xBR4Pa/8wicDBMerUjEeAE+4njx/Z7fzDxI+ZS0ATpnkFB/yPzxcjIjOsih6uPwwwgUVcHwN17mXx+N1IpjdLYiu6R1DhOVyubzVJZ/Xx2P5vkMhqHil83NlbRVwk8Bd4nddHGRyMPAlUVxfXVv52aHM5Kl4Z7fp4GBLTg0g365rb5mwLPJSuWw6eHOXknqGo0yXwXZxpxykwGK3S/6Uu/Nlc8vFQceNAodez8rpwYqLu6V4Ks0LXi6Tv9JT98K6+MrBKVoYFcc7+ysBXHx1eHTs6eUtII+PDl+5a1x8ZR8tDI5XXh4Ecf7F88NnPg7ks8PnL/ggfvASS51yA/u7Gcr8z9GhxC9wXjo8+hPKvPk75a0fwV+HcKix35EcXBS8a+Djr9PjXAQPhIMv+qqPp7cjZUmBL1OW04PlcEpbxONkfzl8/yS97V1RDJ+PMCF8qevp9SIMD4eH432Io7b03pP0+JMenjil+xO9eZASb1JsOs5VuNO1+2T8fm2NNpwDTX9CUeE6RbbN88XOJ5kKFKg/c06MFjmGwv+61Vn9j9pS6L+hbvjKRij8rzd79+iAuBQuSv8EQvLxyifqz7ODMx/d+HUR1wO2X5bRy/uv1MRV6qQomjoMsxsuvb6Yx4gnD6v0xAvU6VwsdfKTKUiSEJgiiXv5e1ob59zpXMIjrXBrnE+2nH8bqyxbZUyh57EnhDoStEPp6ZeDW0lYlx/kE8aAVaBP/he4FNRF4fNu89aZ0zys/suxBkPGbUsAl6RA5rfObxSMsp82pCJrP5Vxw+VHEXDJ9Jv7rWuv3B5LbJx1q7jABaILc91NvHm7C9+xcJV1kxvAHV1yZ9Di52YT5M/rkiAw8cVNLqvqgHu8k73w5cvGMVlg44Hbc1bVHdzVAyEk4AmPRMK4gNgMPPxIBEl9c3OzNfLoML/4rjhqwWa0xGmPoWCPs2G2ZwqhCMskzF52eMZF/ehjqEBhYNMPtcsSxHtDSAjjPdnusvYheIDYAzSvMOQkrwb9UilLohRNPRpmz9uw1B9ccfMKZeJ4wU15DrtxztTN88CmcAD3BDIIninUBtmQDNHfY+jmXj+8New9qOGPWzO1iOzmTq27cY5sXqplcBzVSxcmmrxpXmBbB+3Iw3lU77+L86b5rp9oR18roJUp9S/ODWN+BNM0jPMLjI7asRciV9hO2VK2//ZNb29PEPbOe2/e9rP4VlcZNp45w3ZzdvWDtsVZ1Iq/OtpGzzgxSv3tGIW9Phv+hV4aIhD64u9s2eRL/VhJqDil1dDtGq7QXrZup69NaRivNhsHfkBvFwG5NKDR7Bfc27Wk2sNASKcTX82fxQfKRc7ZAXoZU+PEH15mIz2HLF4OE+RUOIntq9pwcNmH4bvfvxwMa2esYizif/5W2wvJ+HQiAAAAAElFTkSuQmCC" style="width:80px; height:5em; margin-top:5%;">
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
       <?php include('includes/sidebar.php');?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content"><br>
                                <span class="card-title"><h3>Leave History</h3></span>
                                  <!-- main nav-bar -->

 <div class="k left-sidebar-hover"><ul>
       <li> <div  class="col-sm-3"><a href="changep.php" >CHANGE PASSWORD</a></div></li>
        <li><div  class="col-sm-3"><a href="leave.php" >APPLY LEAVE</a></div></li>
        <li><div  class="col-sm-3"><a href="profile.php" >VIEW PROFILE</a></div></li>
        <li><div  class="col-sm-3"><a href="logout.php" >LOGOUT</a></div></li>
</ul>
        </div>
        
<!-- completed -->
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                <table id="example" class="display responsive-table "  border="10">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="120">Leave Type</th>
                                            <th width="120">From</th>
                                            <th width="120">To</th>
                                             <th width="120">Description</th>
                                             <th width="125">Posting Date</th>
                                            <th width="200">Admin Remak</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
<?php 
$eid=$_SESSION['eid'];
$sql = "SELECT LeaveType,ToDate,FromDate,Description,PostingDate,AdminRemarkDate,AdminRemark,Status from tblleaves where empid=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->LeaveType);?></td>
                                            <td><?php echo htmlentities($result->ToDate);?></td>
                                            <td><?php echo htmlentities($result->FromDate);?></td>
                                           <td><?php echo htmlentities($result->Description);?></td>
                                            <td><?php echo htmlentities($result->PostingDate);?></td>
                                            <td><?php if($result->AdminRemark=="")
                                            {
echo htmlentities('waiting for approval');
                                            } else
{

 echo htmlentities(($result->AdminRemark)." "."at"." ".$result->AdminRemarkDate);
}

                                            ?></td>
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
