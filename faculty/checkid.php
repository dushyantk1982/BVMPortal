<?php 
	$fac_id=$_REQUEST['fac_id'];
	
	//include('dblocal.php');					 
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$col=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
	if($row=mysql_fetch_array($col,MYSQL_ASSOC))
	{
		header('location:faculty_reg.php?res=Already Registered');
	}
	else
	{
		header('location:faculty_reg.php?res=Not Registered');
	}
						 
?>
						 
						 
