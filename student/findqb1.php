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
	  <?php
	   
	//$cr=$_POST['str'];
	//$sem=$_POST['sem'];
	$fno=$_GET['fileno'];
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	//echo $r['st_name'];?>
	  &nbsp;&nbsp;
	  <?php
	//echo $r['course'];
	$cr=$r['course'];
	$sem=$r['sem'];
	}
  $result=mysql_query("select * from qb where course='".$cr."' and sem='".$sem."' order by paper_code ASC");
  {
  	echo "<table width='200' border='1' align='center'><tr><td align='center' style='font-weight:bold;'>Paper code</td><td align='center' style='font-weight:bold;'>Download</td></tr>";
  	while($row=mysql_fetch_array($result))
	{
		  	echo "<tr><td align='center'>".$row['paper_code']."</td><td align='center'><a href=qb/".$row['name']." target='blank'>Download</a></td></tr>";
	}
	echo "</table>";
  }
  
  ?>
     
</body>
</html>
