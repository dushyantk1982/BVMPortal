<?php
$fac_id=$_REQUEST['fac_id'];

$sn=1;
/*$paper_code=$_POST["code"];
$sub=$_POST["sub"];
$faculty=$_POST["faculty"];
*/
try
{
//include('dblocal.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	$rs=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
	while($r=mysql_fetch_array($rs))
	{$faculty_name=$r['faculty_name'];}
	echo "<b>Subject Assigned</b><hr />";
	$res=mysql_query("select * from faculty_assign where faculty_name='".$faculty_name."'",$conn);
	echo "<table width='100%'><tr><td style='font-weight:bold;'>S.No.</td><td style='font-weight:bold;'>Paper Code</td><td style='font-weight:bold;'>Paper Name</td></tr>";
	while($row=mysql_fetch_array($res))
	{
		echo "<tr><td>".$sn."</td><td>".$row['paper_code']."</td><td>".$row['paper_name']."</td></tr>";
		$sn=$sn+1;
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
