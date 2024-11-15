<?php 
	 
	$cn=mysql_connect("localhost","root","");
	if(!$cn)
	{die("Could Not Connect".mysql_error());}
	mysql_select_db('bvmclg',$cn);
?>
	