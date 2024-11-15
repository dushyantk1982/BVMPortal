<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style8 {
	font-size: 18px;
	color: #003333;
}
-->
</style>
</head>

<body>
<div align="center"><h3>New Registration of Faculty</h3></div>
<?php
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
echo "<table border='1' align='center'><tr><td>S.no</td><td>Name</td><td>ID</td><td>Department</td><td>Designation</td><td>Activate</td><td>Delete</td></tr>";
$s=1;
$res=mysql_query('select * from faculty_reg where ststus="InActive"');
while($r=mysql_fetch_array($res))
{
	echo "<tr><td>".$s."</td><td>".$r['faculty_name']."</td><td>".$r['fac_id']."</td><td>".$r['dept']."</td><td>".$r['design']."</td><td><a href=activate_faculty.php?fac_id=".$r['fac_id'].">Active</a></td><td><a href=delete_faculty_id.php?fac_id=".$r['fac_id'].">Delete</a></td></tr>";
	$s=$s+1;
}
echo "</table>";

mysql_query("update faculty_reg set reg='old' where reg='new'",$conn);
//echo "<h3>New Sugestions</h3>";
?>
</div>
</body>
</html>
