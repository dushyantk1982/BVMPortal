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
<br /><br /><br />
	<form action="" method="post">
	<table align="center"><tr><td><input type="hidden" name="course" value="<?php echo $_GET['course']; ?>" />
	<input type="hidden" name="fileno" value="<?php echo $_GET['fileno']; ?>" /></td><td>
	<select name="sem">
		<option value="">Select Sem</option>
			<?php 
			$course=$_GET['course'];
			$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
				if(!$conn)
				{die('Could not connect:'.mysql_error());}
				mysql_select_db('bvmgroup_bvmclg');
				$res=mysql_query("select DISTINCT(sem) from exam_paper where course='".$course."'",$conn);
				while($r=mysql_fetch_array($res))
				{echo "<option value='".$r['sem']."'>".$r['sem']."</option>";}
			mysql_close();
			?>
	</select></td><td>
	<select name="session">
		<option value="">Select Session</option>
			<?php 
			$course=$_GET['course'];
			$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
				if(!$conn)
				{die('Could not connect:'.mysql_error());}
				mysql_select_db('bvmgroup_bvmclg');
				$res2=mysql_query("select DISTINCT(year) from exam_paper where course='".$course."'",$conn);
				while($row=mysql_fetch_array($res2))
				{echo "<option value='".$row['year']."'>".$row['year']."</option>";}
			mysql_close();
			?>
	</select></td></tr>
	<tr><td colspan="3" align="center"><input type="submit" name="submit" value="Submit" /></td></tr></table>
	</form>
	<p>
	  <?php
	  if($_REQUEST['submit']=='Submit')
	  {
	$fno=$_POST['fileno'];
	$course=$_POST['course'];
	$sem=$_POST['sem'];
	$session=$_POST['session'];
	
	$i=1;
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$result=mysql_query("select * from exam_paper where course='".$course."' and year='".$session."' and sem='".$sem."'",$conn);
	echo $course."&nbsp;".$sem."Sem.&nbsp;".$session;
	echo "<table border='1'><tr><td align='center' style='font-weight:bold;'>S.no.</td><td align='center' style='font-weight:bold;'>Paper Name</td><td align='center' style='font-weight:bold;'>Link</td></tr>";
	
	while($q=mysql_fetch_array($result))
	{
	echo "<tr><td align='center'>".$i."</td><td>".$q['paper_name']."</td><td><a href='exam_paper/".$q['name']."' target='_blank' style='color:#000066; text-decoration:none;'>Download</a></td>";
	$i=$i+1;
	}
	}
  ?>
      
  
  
  
  
</body>
</html>
