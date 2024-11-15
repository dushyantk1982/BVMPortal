<?php
	$file_no=$_REQUEST['file_no'];
	
	$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
		mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());

        $res=mysql_query("select * from student_reg",$cn);
		while($row=mysql_fetch_array($res))
		{
			for($i=0;$i<count($file_no);$i++)
			{
				if(strcmp($file_no[$i],$row['file_no'])==0)
				{
		      		$result = mysql_query("DELETE FROM student_reg WHERE file_no='".$file_no[$i]."'",$cn)or die(mysql_error()); 
			}}
        }
		mysql_close();
   
header('location:del_reg.php');


?>
