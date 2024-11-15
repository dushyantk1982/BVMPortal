<?php 
	
	$pwd=$_POST['pwd'];
	$fileno=$_POST['fileno'];
	
	//include('dbcon.php');					 
	$conn=mysql_connect("localhost:3360","bvmgroup","PWD@bvm1");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmclg');
	$col=mysql_query("select * from student_reg where file_no=".$fileno." and pwd='".$pwd."'",$conn);
	if($row=mysql_fetch_array($col,MYSQL_ASSOC))
	{
		header('location:sthome.php?fileno='.$fileno);
	}
	else
	{
		header('location:stlogin.php?msg=error');
	}
						 
?>
						 
						 

</body>
</html>
