<?php
$id=0;
$paper_code=$_POST["code"];
$sub=$_POST["sub"];
$faculty=$_POST["faculty"];
try
{
//include('dblocal.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
//$cn=mysql_connect("localhost","root","")or die(mysql_error());
	//mysql_select_db("bvmclg")or die(mysql_error());
	//$q="select * from autogen";
	$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	$res=mysql_query("select * from faculty_assign",$cn);
	echo "<table width='100%'><tr><td>S.No.</td><td>Paper Code</td><td>Paper Name</td><td>Faculty Assigned</td></tr>";
	while($row=mysql_fetch_array($res))
	{
		echo "<tr><td>".$row['s_no']."</td><td>".$row['paper_code']."</td><td>".$row['paper_name']."</td><td>".$row['faculty_name']."</td><td><a href='edit_faculty_sub.php?paper_code=".$row['paper_code']."' target='_parent'>Edit</a></td></tr>";
	}
	echo "</table>";
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
/*function goBack()
  {
  window.history.back()
  }*/
</script>

<!--<button onclick="goBack()">Go Back</button>-->
