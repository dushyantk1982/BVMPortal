<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<?php 
$file_no=$_REQUEST['file_no'];
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
//$conn=mysql_connect("localhost","root","");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('bvmgroup_bvmclg');
//mysql_select_db('bvmclg');
$result=mysql_query("select * from student_reg where file_no='".$file_no."'",$conn);
while($n=mysql_fetch_array($result))
{
$session=$n['batch'];
}
$res=mysql_query("select * from notice order by id DESC",$conn);
$last_date= ''; 
while($r=mysql_fetch_array($res))
{
if(strcmp($session,$r['batch'])==0)
{
if(strcmp($r['dept'],'MGMT')==0 || strcmp($r['dept'],'ALL')==0)
{
if($r['size']==0){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='#' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
}
else if($r['size']==1){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
}
else
{
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='student/notice/".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['name']."</a></td></tr></table>";
$last_date = $r['created'];  
}}}}
mysql_close();
?>

</body>
</html>
