<?php
$id=0;
$k=0;
$paper_code=$_POST["code"];
$file_no=$_POST["file_no"];
$question=$_POST["que"];
$s_no=$_POST['s_no'];
//$assign=$paper_code;
//$fac_id=$_POST['fac_id'];
try
{
//include('dblocal.php');
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
		for($j=0;$j<count($question);$j++)
		{
			if(strcmp($question[$j],"")!=0)
			{
			//echo $question[$j]."<br/>";
			//mysql_query("update assignment set question='".$question[$j]."' where file_no='".$file_no."' and paper_code='".$paper_code."'",$conn);
			$q="update assignment set question='".$question[$j]."' where s_no='".$s_no[$j]."'";
			echo $q;
		mysql_query($q,$conn);
			}
		}
	//}//mysqli_close($cn);
	//}
	//echo $id;
	header('location:displayassign.php?msg=ok&file_no='.$file_no.'&assign='.$paper_code);
	
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
