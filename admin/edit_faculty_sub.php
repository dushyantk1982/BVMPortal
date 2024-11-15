<?php

$paper_code=$_REQUEST["paper_code"];
try
{
//include('dblocal.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
//$cn=mysql_connect("localhost","root","")or die(mysql_error());
	//mysql_select_db("bvmclg")or die(mysql_error());
	//$q="select * from autogen";
	$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	$res=mysql_query("select * from faculty_assign where paper_code='".$paper_code."'",$cn);
	echo "<form action='edit_faculty_sub.php?id=edit_faculty_sub' method='post'><table width='100%'><tr><td>S.No.</td><td>Paper Code</td><td>Paper Name</td><td>Faculty Assigned</td></tr>";
	while($row=mysql_fetch_array($res))
	{
		echo "<tr><td><input type='text name='s_no' value='".$row['s_no']."' /></td><td><input type='text name='paper_code' value='".$row['paper_code']."' /></td><td><input type='text name='paper_name' value='".$row['paper_name']."' /></td><td><input type='text name='faculty_name' value='".$row['faculty_name']."' /></td></tr>";
	}
	echo "<tr><td><input type='submit' name='submit' value='Edit' /></td></tr></table></form>";
}
catch(Exception $e)
{
	echo $e."";
}	
if($_REQUEST['submit']=='Edit')
{
$paper_code=$_POST['paper_code'];
$paper_name=$_POST['paper_name'];
$faculty_name=$_POST['faculty_name'];
mysql_query("update faculty_assign set paper_code='".$paper_code."',paper_name='".$paper_name."',faculty_name='".$faculty_name."' where paper_code='".$paper_code."' ",$cn);
mysql_close();
header("location:adhome.php?id=4.3");
}
//echo $paper_code;
//echo $sub;
//echo $faculty;
?>
<script>
/*function goBack()
  {
  window.history.back()
  }*/
</script>

<!--<button onclick="goBack()">Go Back</button>-->
