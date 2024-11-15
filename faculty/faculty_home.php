<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
a{
color:#990000;
text-decoration:none;}
a:hover{color:#FFFFFF;}
</style>
<style type="text/css">
nav ul ul{display:none;}
nav ul li:hover > ul{display:block;}
nav ul
{
backgroud:#660000;
background:linear-gradient(top,#660000 0%,#660000 100%);
background:-moz-linear-gradient(top,#660000 0%,#660000 100%);
background:-webkit-linear-gradient(top,#660000 0%,#660000 100%);
box-shadow:0px 0px 9px rgba(0,0,0,0.15);
padding:0 76px;
border-radius:0px;
list-style:none;
position:relative;
display:inline-table;
/*margin-top:15px;*/
}
nav ul:after
{content:"";
clear:both;
display:block;
}
nav ul li{float:left;}
nav ul li:hover
{
backgroud:#4b545f;
background:linear-gradient(top,#4E5964 0%,#5F6975 40%);
background:-moz-linear-gradient(top,#4E5964 0%,#5F6975 40%);
background:-webkit-linear-gradient(top,#4E5964 0%,#5F6975 40%);
}

nav ul li:hover a{color:#ffff00;}
nav ul li a{
display:block;
padding:5px 20px;
color:#efefef;
text-decoration:none;
font-weight:bold;
}
nav ul ul
{
background:#5F6975;
border-radius:0px;
padding:0;
position:absolute;
top:100%;
}
nav ul ul li
{
float:none;
border:top:1px solid #6B727C;
border:top:1px solid #575F6A;
position:relative;
}
nav ul ul li a
{
padding:5px 40px;
color:#fff;
}
nav ul ul li a:hover
{
background:#660000;
}
nav ul ul ul
{
position:absolute;
left:100%;
top:0px;
}
</style>

</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="right"></div>
		<div class="layer1">
			<table width="100%">
    			<tr>
      				<td width="25%">
						<div align="right">
							<input type="image" src="images/logo.jpg" align="middle" width="100" height="80" />&nbsp;&nbsp;
						</div>
					</td>
					<td width="75%" valign="middle">
						<div align="left">
							<span class="logo" style="font-size:56px;">BVM Group of Colleges</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%"><div align="left"></div></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
			</table>
			<span style="color: #B7B7B7">
				<marquee behavior="alternate" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Welcome <?php $fac_id=$_REQUEST['fac_id']; //include('dblocal.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	$rs=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
	while($r=mysql_fetch_array($rs))
	{echo $r['faculty_name']; }
					?></span>
				</marquee>
			</span>
		</div>
		<div class="layer2">
			<?php 
				$fac_id=$_REQUEST['fac_id'];
			//include('menu/index.html'); ?>
			<nav>
			<!--<div style="background-color:#CCCCCC;">-->
				<ul>
					<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=0">Home</a> </li> 
					<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=1" target="_parent">Assigned Subject</a> </li>
					<li><a href="#">Assignment</a>
						<ul>
							<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=2.2" target="_parent">Student List</a> </li>
							<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=2" target="_parent">Create Assignment</a> </li>
							<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=2.1" target="_parent">Display Assignment</a> </li>
						</ul>
					</li>
					<li><a href="#">QB</a>
						<ul>
							<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=5" target="_parent">Upload QB</a> </li>
							<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=5.1" target="_parent">Display QB</a> </li>
						</ul>
					</li>
					<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=3" target="_parent">Academic Calendar</a> </li>
					<li><a href="faculty_home.php?fac_id=<?php echo $fac_id; ?>&id=4" target="_parent">Syllabus</a> </li>
				<!--<a href="faculty_home.php?fac_id=<?php //echo $fac_id; ?>&id=5" target="_parent">Complaint/Sugestion</a> | -->
				<!--<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=8" target="_parent">Complaint/Query</a> | -->
					<li><a href="bvmgroup.org" target="_parent">Logout</a></li>
				</ul>
			
		<!--</div>-->
		</nav>
	</div>
	<div class="container">
		<div class="left"></div>
		<div class="content" align="center">
		<?php
		$fac_id=$_REQUEST['fac_id'];
		if(@$_REQUEST['id']==1){
		?>
		<iframe align="middle" height="470" width="100%" src="display_faculty.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==2){
		?>
		<iframe align="middle" height="470" width="100%" src="createassignment.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==2.1){
		?>
		<iframe align="middle" height="470" width="100%" src="get_student.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==2.2){
		?>
		<iframe align="middle" height="470" width="100%" src="st_list.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==3){
		?>
		<iframe align="middle" height="470" width="100%" src="../_notes/academic_calender.pdf" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==4){
		?>
		<iframe align="middle" height="470" width="100%" src="chksyllab.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==5){
		?>
		<iframe align="middle" height="470" width="100%" src="get_qb.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==5.1){
		?>
		<iframe align="middle" height="470" width="100%" src="findqb1.php?fac_id=<?php echo $fac_id; ?>" name="sthome"></iframe>
		
		<?php }else{?>
		<iframe align="middle" height="470" width="100%" src="update.php" name="index"></iframe>
		<?php
		}
		?>
		</div>
		<div class="right"></div>
	</div>
	
	<div class="footer">
		<!--<div class="footer1" align="center"></div>-->
		<div class="footer2 style1"><hr />
			<table width="984">
				<tr>
					<td width="92%" align="center">&copy;BVM College of Management Education, Gwalior. All rights are reserved.					</td>
					<td width="8%" align="right">
						<a href="sthome.php?fileno=<?php echo $fno; ?>&id=9" target="_parent" title="Dushyant Upadhyay">Developed By</a>					</td>
				</tr>
		  </table>
		</div>
	</div>
</div>
</body>
</html>
