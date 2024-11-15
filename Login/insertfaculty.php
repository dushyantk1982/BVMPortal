<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$paper_code=$_POST["code"];
$sub=$_POST["sub"];
$faculty=$_POST["faculty"];
try
{
$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
//$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	for($i=0;$i<count($paper_code);$i++)
	{
		if(strcmp($paper_code[$i],"")!=0)
		{
			mysql_query("insert into faculty_assign values('".$paper_code[$i]."','".$sub[$i]."','".$faculty."')",$cn);
				}
		}
	}
catch(Exception $e)
{
	echo $e."";
}	
//echo $paper_code;
//echo $sub;
//echo $faculty;
?>
<script>
function goBack()
  {
  window.history.back()
  }
</script>

<button onclick="goBack()">Go Back</button>

</body>
</html>
