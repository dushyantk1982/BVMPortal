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
							<span class="logo">BVM Group of Colleges</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%"><div align="left"></div></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
						<tr>
						<td width="25%"><div align="left"></div></td>
						<td width="75%">
						
						</td>
						</tr>
			</table>
			<!--<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Welcome to Student Portal | Helpline:0751-2341161 </span>
				</marquee>
			</span>-->
		</div>
		<?php 	
				
				
				if(isset($submit))
				{
				extract($_POST);
				$fac_id=$_POST['fac_id'];
					include("dblocal.php");
					$res=mysql_query("select * from faculty_reg where fac_id='$loginid' and password='$pass'",$conn) or die(mysql_error());
					/*if(mysql_num_rows($res)<1)
					{
						echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
						exit;
					}
					$_SESSION['alogin']="true";
					
				}*/
				/*else if(!isset($_SESSION['alogin']))
				{
					echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=faculty_login.php>Login</a><div>";
					exit;
				}*/
				?>
				
		<div class="layer2">
			<div style="background-color:#CCCCCC;">
				<a href="display_faculty.php?fac_id=<?php echo $fac_id; ?>">Assigned Subject</a> | 
				<a href="sthome.php?fileno=<?php echo $fno; ?>&batch=<?php echo $bt; ?>&id=1" target="_parent">Notice</a> |
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=2" target="_parent">Assignments</a> |
				<!--<a href="date_of_assognment.php?fileno=<?php //echo $fno; ?>&id=2" target="_parent">Assignments</a> | -->
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=3" target="_parent">Question Bank</a> | 
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=4" target="_parent">College Calendar</a> | 
				<!--<a href="sthome.php?fileno=<?php //echo $fno; ?>&id=5" target="_parent">Depatmental Calendar</a> | -->
				<!--<a href="#" target="_parent">Depatmental Calendar</a>-->
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=10" target="_parent">Old Papers</a> | 
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=6" target="_parent">Syllabus</a> | 				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=7" target="_parent">Results</a> | 
				<a href="sthome.php?fileno=<?php echo $fno; ?>&id=8" target="_parent">Complaint/Query</a> | 
				<a href="../index.php" target="_parent">Logout</a>
			
		</div>
	</div>
	<div class="container">
		<div class="left"></div>
		<div class="content" align="center">
		<?php
		if(@$_REQUEST['id']==1){
		?>
		<iframe align="middle" height="470" width="100%" src="update.php?fileno=<?php echo $fno; ?>&course=<?php echo $cr; ?>&sem=<?php echo $sem; ?>&bt=<?php echo $bt; ?>" name="sthome"></iframe>
		<!--<iframe align="middle" height="470" width="100%" src="<?php 
																//if($cr=='MBA' || $cr=='BBA')
																	//{echo "mbaupdate.php?id='".$batch."'";}
																//else
																	//{echo "mcaupdate.php";}
															   ?>" name="sthome"></iframe>-->
		<?php
			}else if(@$_REQUEST['id']==2){
		?>
		<iframe align="middle" height="470" width="100%" src="findassign.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<!--<iframe align="middle" height="470" width="100%" src="date_of_assignment.php?fileno=<?php //echo $fno; ?>" name="sthome"></iframe>-->
		<?php
			}else if(@$_REQUEST['id']==3){
		?>
		<iframe align="middle" height="470" width="100%" src="findqb.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==4){
		?>
		<iframe align="middle" height="470" width="100%" src="../_notes/academic_calender.pdf" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==5){
		?>
		<iframe align="middle" height="470" width="100%" src="<?php
																if($cr=='MBA' || $cr=='BBA')
																	{echo "deptcal/manag2014.pdf";}
																else
																	{echo "deptcal/it2014.pdf";}
															  ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==6){
		?>
		<iframe align="middle" height="470" width="100%" src="findsyllab.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==7){
		?>
		<iframe align="middle" height="470" width="100%" src="findresult.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==8){
		?>
		<iframe align="middle" height="470" width="100%" src="complaint.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==9){
		?>
		<iframe align="middle" height="470" width="100%" src="../developed.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==10){
		?>
		<iframe align="middle" height="470" width="100%" src="get_paper.php?fileno=<?php echo $fno; ?>&course=<?php echo $cr; ?>&sem=<?php echo $sem; ?>" name="sthome"></iframe>
		
		
		<?php }else{?>
		<iframe align="middle" height="470" width="100%" src="home.php" name="index"></iframe>
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
<?php } ?>
</body>
</html>
