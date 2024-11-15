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
<?php 
	  		$fno=$_GET['fileno'];
			$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
				$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
				while($r=mysql_fetch_array($res))
				{
					$name=$r['1'];
					$cr=$r['course'];
					$bt=$r['batch'];
					$sem=$r['sem'];
				}
		?>
        <div align="center">Welcome <?php echo $name; ?></div>
<div align="center"><img src="images/cats.jpg" height="400" width="650" /></div>
</body>
</html>
