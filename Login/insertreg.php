<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$nm=$_GET['name1'];
$fno=$_GET['fn'];
$crs=$_GET['crs'];
$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	
for($i=0;$i<count($fno);$i++)
{
	$q="insert into student_reg values(".$fno[$i].",'".$nm[$i]."','".$crs[$i]."','password')";
	mysql_query($q,$cn);
}

echo"Record Inserted.......";

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
