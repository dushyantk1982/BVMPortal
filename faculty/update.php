<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #660000;
}
-->
</style>
</head>
<body class="pagefont">
	<p>
	  <?php
	   
	/*$fno=$_GET['fileno'];
	$course=$_GET['course'];
	$sem=$_GET['sem'];
	$batch=$_GET['bt'];
	if($course=='MBA' || $course=='BBA')
	{$dept='MGMT';}
	else
	{$dept='IT';}*/
	$fac_id=$_REQUEST['fac_id'];
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$rs=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
	while($row=mysql_fetch_array($rs))
	{$dept=$row['dept'];}
	$res=mysql_query("select * from notice order by id DESC",$conn);
	$last_date= ''; 
	while($r=mysql_fetch_array($res))
	{
		/*if($batch<=$r['batch'])
		{*/

		if(strcmp($r['dept'],$dept)==0 || strcmp($r['dept'],'BOTH')==0 || strcmp($r['dept'],'ALL')==0)
		{
			
			$date = ($last_date == $r['created']) ? '' : $r['created'];
			
			if($r['size']>'1')
			{echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='../student/notice/".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";}
			else
			{
			echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
}
			$last_date = $r['created'];  
		}}
	//}
mysql_close();
	

  ?>
      
  
  
  
  
</body>
</html>