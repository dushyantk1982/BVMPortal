<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	color: #660000;
}
-->
</style>
</head>
<body class="pagefont">
	<p>
	  <form action="findqb1.php?id=findqb1" method="post" enctype="multipart/form-data">
	<input type="text" name="date" value="<?php 
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 echo $date->format('d-m-Y'); ?>" size="10" readonly="yes">	
	<select name="course">
		<option value="">Select Course</option>
		<option value="MBA">MBA</option>
		<option value="MCA">MCA</option>
		<option value="BBA">BBA</option>
		<option value="BCA">BCA</option>
		<option value="BCA(M)">BCA(MCRPV)</option>
	</select>
	<select name="sem">
		<option value="">Select Semester</option>
		<option value="1">I Sem</option>
		<option value="2">II Sem</option>
		<option value="3">III Sem</option>
		<option value="4">IV Sem</option>
		<option value="5">V Sem</option>
		<option value="6">VI Sem</option>
	</select>
	<input type="submit" name="submit" value="Display">
	 </form>
	  <?php
	   if($_REQUEST['submit']=='Display')
	   {
	//$cr=$_POST['str'];
	//$sem=$_POST['sem'];
	//$fno=$_GET['fileno'];
	//include('dbcon.php');
	
	$cr=$_POST['course'];
	$sem=$_POST['sem'];
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	
	
  $result=mysql_query("select * from qb where course='".$cr."' and sem='".$sem."'");
  {
  	echo "<table width='200' border='1' align='center'><tr><td align='center' style='font-weight:bold;'>Paper code</td><td align='center' style='font-weight:bold;'>Download</td></tr>";
  	while($row=mysql_fetch_array($result))
	{
		  	echo "<tr><td align='center'>".$row['paper_code']."</td><td align='center'><a href=qb/".$row['name']." target='blank'>Download</a></td></tr>";
	}
	echo "</table>";
  }
  }
  ?>
     
</body>
</html>
