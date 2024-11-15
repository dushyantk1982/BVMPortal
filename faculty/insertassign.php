<?php
$id=0;
$k=0;
$paper_code=$_POST["code"];
$file_no=$_POST["fn"];
$question=$_POST["que"];
$fac_id=$_POST['fac_id'];
try
{
//include('dblocal.php');
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	$res=mysql_query("select * from assignment",$conn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["sno"];
	}
	for($i=0;$i<count($file_no);$i++)
	{
	if(strcmp($file_no[$i],"")!=0)
	{
		for($j=0;$j<count($question);$j++)
		{
		if(strcmp($question[$j],"")!=0)
		{
		$res=mysql_query("select * from assignment",$conn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	$id=$id+1;
		$q="insert into assignment values(".$id.",".$file_no[$i].",'".$paper_code."','".$question[$j]."','inactive')";
			mysql_query($q,$conn);
	
	
			//$k=1;
	//$q="update autogen set sno=sno+".$k;
	//mysql_query($q,$cn);

			//$q="update autogen set sno=".$id-12;
			//mysql_query($q,$cn);
		}
		}
	}//mysqli_close($cn);
	}
	//echo $id;
	header('location:createassignment.php?msg=ok&fac_id='.$fac_id);
	echo"Record Inserted.......";
	} 
catch(Exception $e)
{
	echo $e."";
}	

//$q="insert into internal_record values(".$id.",'".$course."','".$sem."','".$ses."','".$inter."','".$file_no."','".$marks."','-','-','-')";
//	echo "</br>".$q;
//	mysql_query($q,$cn);
//	echo"Record Inserted...";
//	$q="update autogen set s_no=s_no+1";
//	mysql_query($q,$cn);
//	header('Location:internalpage2.php');
?>
