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
$fac_id=$_REQUEST['fac_id'];
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
mysql_query("update faculty_reg set ststus='Active' where fac_id='".$fac_id."'");
//echo "<h3>New Sugestions</h3>";
?>
</div>
</body>
</html>
