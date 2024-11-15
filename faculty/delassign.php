<?php
$paper_code=$_REQUEST["assign"];
$file_no=$_REQUEST["file_no"];
try
{
//include('dblocal.php');
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
			$q="delete from assignment where paper_code='".$paper_code."' and file_no='".$file_no."'";
		mysql_query($q,$conn);
		echo "Record Deleted..........!";

	//header('location:displayassign.php?msg=ok&file_no='.$file_no.'&assign='.$paper_code);
	
	} 
catch(Exception $e)
{
	echo $e."";
}	


?>
