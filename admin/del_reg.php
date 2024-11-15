<?php
	$course=$_POST['course'];
		$sem=$_POST['sem'];
		$u_sem=$_POST['u_sem'];
		echo $course."<br />";
		echo $sem."<br />";
		echo $u_sem;
		$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
		//include('dblocal.php');
		//mysql_select_db("bvmclg")or die(mysql_error());
		
		$res=mysql_query("select * from student_reg",$cn);
		
		echo "<form action='del_reg_record.php' method='post'>";
		echo "<table width='500' border='1'>";
		
	while($row=mysql_fetch_array($res))
	{
		if(strcmp($course,$row['course'])==0 && strcmp($sem,$row['sem'])==0)
		{echo "<tr><td>".$row['file_no']."</td><td>".$row['st_name']."</td><td>".$row['course']."</td><td>".$row['sem']."</td><td>".$row['pwd']."</td><td><input type='checkbox' name='file_no[]' value='".$row['file_no']."'></td></tr>";
		}
		}
		echo "</table>";
		echo "<input type='submit' value='Submit' name='submit' />"
//echo "<a href='del_reg_record.php?file_no=".$row['file_no']."'>Delete</a>";
?>
	
