<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {font-size: 18px}
.style11 {font-size: 24}
-->
</style>
</head>

<body class="pagefont">
<p align="justify" class="pagefont">
<p align="center"><span class="style9"><span class="style11">Welcome on Student Portal
  <?php
  echo $_SESSION['fileno']; 
//	session_start();
//	
//	$fno=$_SESSION['fileno'];
//	$conn=mysql_connect('localhost','root','');
//	if(!$conn)
//	 {die('Could not connect:'.mysql_error());}
//	 mysql_select_db('bvmclg');
//	$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
//	
//	while($r=mysql_fetch_array($res))
//	{
//	echo $r['st_name'];
//
//	}
//  
//  ?></span></span>
</body>
</html>
