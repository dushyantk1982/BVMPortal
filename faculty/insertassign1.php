<?php
$id=0;
$k=0;
$paper_code=$_POST["code"];
$file_no=$_POST["fn"];
$question=$_POST["que"];
//$ses=$_POST["selyear"];
//$marks=$_POST["codes1"].",".$_POST["codes2"].",".$_POST["codes3"].",".$_POST["codes4"].",".$_POST["codes5"].",".$_POST["codes6"].",".$_POST["codes7"];
//$file_no=$_POST["fileno"];
//echo "</br>Course: ".$course;
//echo "</br>Sem: ".$sem;
//echo "</br>Internal: ".$inter;
//echo "</br>Session: ".$ses;
//echo "</br>Marks: ".$marks;
//echo "</br>File No: ".$file_no;
try
{
include('dblocal.php');
//	$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	$res=mysql_query("select * from assignment",$conn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["sno"];
	}
	
	for($i=0;$i<count($file_no);$i++)
	{
		$j=0;
		if(strcmp($file_no[$i],"")!=0)
		{
			//for($j=0;$j<count($question);$j++)
			
			while($j<count($question))
			{
				if(strcmp($question[$j],"")!=0)
				{
					$res=mysql_query("select * from assignment",$conn);
					while($row=mysql_fetch_array($res))
					{
						$id=$row["s_no"];
					}
					$id=$id+1;
					$q="insert into assignment values(".$id.",".$file_no[$i].",'".$paper_code."','".$question[$j]."')";
					mysql_query($q,$conn);
					$j=$j+1;
				}
			}
		}//mysqli_close($cn);
	}
	//echo $id;
	header('location:createassignment.php?msg=ok');
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
