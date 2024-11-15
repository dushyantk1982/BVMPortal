<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	//session_start();
	//$_POST['course']=$course;
	//$_POST['sem']=$sem;
	//$_POST['internal']=$internal;
	//$_POST['year']=$year;
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="insertinternal.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="2">INTERNAL MARKS<br/><br/><br/></td></tr>
						 
	<tr><td align="center"><?php echo $_POST['course']; ?></td><td><?php echo $_POST['sem']; ?></td></tr>
	<tr><td align="center"><?php echo $_POST['internal']; ?></td><td><?php echo $_POST['code']; ?></td></tr>
</table>
<table width="30%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
<?php
$paper_code=$_POST["code"];
//$file_no=$_POST["fno"];
$course=$_POST["course"];
$sem=$_POST["sem"];
$internal=$_POST["internal"];
$session=$_POST["year"];
//$marks=$_POST["marks"];
$count=$_POST['count'];
$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
//	include('dblocal.php');
	//mysql_select_db('bvmclg');
	$res=mysql_query("select * from student_reg where course='".$course."' and sem='".$sem."'",$cn);
echo "<tr align='center'>
	<td align='center'>S.No.</td>
	<td align='center'>File No</td>
	<td align='center'>Marks</td>
</tr>";
$i=1;
while($r=mysql_fetch_array($res))
{
echo "<tr align='center'>
	<td align='center'>".$i."</td>
	<td align='right'><input type='text' name='fno[]' value=".$r['file_no']."  size='12' /></td>
	<td align='left'><input type='text' name='marks[]' value='A' size='12' /></td>
</tr>";
$i=$i+1;
}
/*for($i=1;$i<=$count;$i++)
{
echo "<tr align='center'>
	<td align='center'>".$i."</td>
	<td align='right'><input type='text' name='fno[]'  size='12' /></td>
	<td align='left'><input type='text' name='marks[]' value='A' size='12' /></td>
</tr>";
}
*/?>


<tr><td><input name="ok" type="submit" class="style30" value="Submit" /></td></tr>
</table>
<input type="hidden" name="code" value="<?php echo $paper_code; ?>" />
<input type="hidden" name="course" value="<?php echo $course; ?>" />
<input type="hidden" name="sem" value="<?php echo $sem; ?>" />
<input type="hidden" name="internal" value="<?php echo $internal; ?>" />
<input type="hidden" name="year" value="<?php echo $session; ?>" />
</form>
</div>
</body>
</html>
