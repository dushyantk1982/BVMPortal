<?php 
	 
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	{die("Could Not Connect".mysql_error());}
	mysql_select_db('bvmgroup_bvmclg',$conn);
?>
	