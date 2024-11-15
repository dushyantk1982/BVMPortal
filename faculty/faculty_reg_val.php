<?php
$sno=0;
extract($_POST);
//include('dblocal.php');
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
$res=mysql_query('select * from faculty_reg');
while($r=mysql_fetch_array($res))
{
	$sno=$r['sno'];
	$id=$r['fac_id'];
}
if($id!=$fac_id)
{
$sno=$sno+1;
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));

$q="insert into faculty_reg values('".$sno."','".$faculty_name."','".$fac_id."','".$password."','".$contact."','InActive','".$date->format('d-m-Y')."','".$dept."','".$design."','new')";
//echo $q;
mysql_query($q,$conn);

mysql_close();
header('location:faculty_login.php?msg=login');
exit;
}
else
{
header('location:faculty_reg.php?msg=error');
}
?>