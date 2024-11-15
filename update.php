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
<em><strong><span class="style1" style="color:#000066;"><u>Update</u></span></strong></em><br />
<hr />
<?php 
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('bvmgroup_bvmclg');
$res=mysql_query("select * from notice order by id DESC",$conn);
$last_date= ''; 
$c=1;
while($r=mysql_fetch_array($res))
{
if($c<=2)
{
if(strcmp($r['dept'],'FRONT')==0 || strcmp($r['dept'],'ALL')==0)
		{
if($r['size']==0){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='#' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
$c++;
}
else if($r['size']==1){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
$c++;
}
else
{
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='student/notice/".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
$c++;
}
}}}

/*while($r=mysql_fetch_array($res))
{
echo "<em><strong><span class='style1' style='color:#000066;'>".$r['created']."</span></strong></em><br />
&nbsp;<a href='student/notice/".$r['name']."' target='_blank' style='color:#000066;'>".$r['name']."</a>
<br />
<br />";
}*/
mysql_close();
?>
<!--<em><strong><span class="style1" style="color:#000066;">15 Oct 2014</span></strong></em><br />
&nbsp;<a href="#" target="_parent" style="color:#000066;">Assignment are availabe on Student Desk: Last date of submission is 10/11/2014.</a>
-->
</body>
</html>
