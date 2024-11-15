<?php
$id=0;
$paper_code=$_POST["code"];
$file_no=$_POST["fno"];
$course=$_POST["course"];
$sem=$_POST["sem"];
$internal=$_POST["internal"];
$session=$_POST["year"];
$marks=$_POST["marks"];
try
{
$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());	
	$q="select * from autogen";
	$res=mysql_query("select * from internal_record",$cn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	for($i=0;$i<count($file_no);$i++)
	{
		if(strcmp($file_no[$i],"")!=0)
		{
		$id=$id+1;
			$q="insert into internal_record values(".$id.",'".$course."','".$sem."','".$session."','".$internal."',".$file_no[$i].",'".$paper_code."','".$marks[$i]."')";
			mysql_query($q,$cn);
			
		}
		}header('location:get_std_count.php?msg=ok');
	}
		
catch(Exception $e)
{
	echo $e."";
}	

?>
