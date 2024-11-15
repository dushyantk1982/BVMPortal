<?php 
	
	$pwd=$_POST['pass'];
	$fac_id=$_POST['loginid'];
	
	//include('dblocal.php');					 
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
	{
			die('Could not connect:'.mysql_error());
	}
	mysql_select_db('bvmgroup_bvmclg');
	$col=mysql_query("select * from faculty_reg where fac_id='".$fac_id."' and password='".$pwd."' and ststus='Active'",$conn);
	if($row=mysql_fetch_array($col,MYSQL_ASSOC))
	{
		header('location:faculty_home.php?fac_id='.$fac_id);
	}
	else
	{
		header('location:faculty_login.php?msg=error');
	}
						 
?>
						 
						 
