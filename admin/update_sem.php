<?php 
	$course=$_POST['course'];
		$sem=$_POST['sem'];
		$u_sem=$_POST['u_sem'];
		$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
		mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
		
		$res=mysql_query("select * from student_reg",$cn);
	while($row=mysql_fetch_array($res))
	{
		if(strcmp($course,$row['course'])==0 && strcmp($sem,$row['sem'])==0)
		{
		$q="UPDATE student_reg SET sem='".$u_sem."' where sem='".$sem."'";
		mysql_query($q,$cn);
		}
		}
header('location:update_std_reg.php?msg=ok');
?>
	