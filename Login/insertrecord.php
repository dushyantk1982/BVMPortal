<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=0;
$course=$_POST["selcourse"];
$sem=$_POST["selsem"];
$inter=$_POST["selinternal"];
$ses=$_POST["selyear"];
$marks=$_POST["codes1"].",".$_POST["codes2"].",".$_POST["codes3"].",".$_POST["codes4"].",".$_POST["codes5"].",".$_POST["codes6"].",".$_POST["codes7"];
$file_no=$_POST["fileno"];
//echo "</br>Course: ".$course;
//echo "</br>Sem: ".$sem;
//echo "</br>Internal: ".$inter;
//echo "</br>Session: ".$ses;
//echo "</br>Marks: ".$marks;
//echo "</br>File No: ".$file_no;
try
{
$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	$q="select * from autogen";
	$res=mysql_query("select * from autogen",$cn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	//echo"</br>".$id;
	$q="insert into internal_record values(".$id.",'".$course."','".$sem."','".$ses."','".$inter."','".$file_no."','".$marks."','-','-','-')";
	echo "</br>".$q;
	mysql_query($q,$cn);
	echo"Record Inserted...";
	$q="update autogen set s_no=s_no+1";
	mysql_query($q,$cn);
	header('Location:internalpage2.php');
}
catch(Exception $e)
{
	echo $e."";
}	
?>
</body>
</html>