<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Assignment</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<style type="text/css" media="print">
    body { visibility: hidden; display: none }
</style>

</head>
<body class="pagefont">
	
	<table align="center" width="70%" height="400" border="1"><tr><td valign="top" >
	  <?php 
	$code="";
	$fl="";
	$i=0;
	$fno=$_POST['fileno'];
	$assign=$_POST['assign'];
	$conn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1");
	if(!$conn)
	 {die('Could not connect:'.mysql_error());}
	 mysql_select_db('bvmclg');
	 	$code=$assign;
	$res=mysql_query("select distinct(file_no) from assignment where paper_code='".$code."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	if($fl=="")
		$fl=$r['file_no'];
	else
		$fl=$fl.",".$r['file_no'];
	}
	//echo $fl;
	$fl_arr=split(",",$fl);
	$set_arr=split(",",$fl);
	
	foreach($fl_arr as $value)
	{
		$flag=0;
	
		$res=mysql_query("select * from assignment where file_no='".$value."' and paper_code='".$code."'",$conn);
		$s="";
		while($r=mysql_fetch_array($res))
		{
			if($s=="")
			{
			$s=$r['question'];
			}
			else
			{
			$s=$s.",".$r['question'];
			}
		}
		//echo $s."<br>";	
		for($j=0;$j<count($set_arr);$j++)
		{
		if(strcmp($set_arr[$j],$s)==0)
			$flag=1;
		}
		if($flag==0)
		{
			$set_arr[$i]=$s;
			//echo "Set ".($i+1).": ".$set_arr[$i]."<br>";
			$i++;
			
		}
	}
	
	$s="";
	$set_val="";	
	$res=mysql_query("select * from assignment where file_no='".$fno."' and  paper_code='".$code."'",$conn);
	while($r=mysql_fetch_array($res))
	{
		if($s=="")
			$s=$r['question'];
			else
			$s=$s.",".$r['question'];
	}
	for($m=0;$m<=$i;$m++)
	{
		if(strcmp($set_arr[$m],$s)==0)
		{
			$set_val=($m+1);
			
			if($set_val==1)
			{$set="SET-A";}
			else if($set_val==2)
			{$set="SET-B";}
			else if($set_val==3)
			{$set="SET-C";}
			else if($set_val==4)
			{$set="SET-D";}
			else if($set_val==5)
			{$set="SET-E";}
			else if($set_val==6)
			{$set="SET-F";}
			else if($set_val==7)
			{$set="SET-G";}
			else if($set_val==8)
			{$set="SET-H";}
			else if($set_val==9)
			{$set="SET-I";}
			else if($set_val==10)
			{$set="SET-J";}
			else if($set_val==11)
			{$set="SET-K";}
			else if($set_val==12)
			{$set="SET-L";}
			else if($set_val==13)
			{$set="SET-M";}
			else if($set_val==14)
			{$set="SET-N";}
			else if($set_val==15)
			{$set="SET-O";}
			else if($set_val==16)
			{$set="SET-P";}
			else if($set_val==17)
			{$set="SET-Q";}
			else if($set_val==18)
			{$set="SET-R";}
			else if($set_val==19)
			{$set="SET-S";}
			else if($set_val==20)
			{$set="SET-T";}
			else if($set_val==21)
			{$set="SET-U";}
			else if($set_val==22)
			{$set="SET-V";}
			else if($set_val==23)
			{$set="SET-W";}
			else if($set_val==24)
			{$set="SET-X";}
			else if($set_val==25)
			{$set="SET-Y";}
			else if($set_val==26)
			{$set="SET-Z";}
			//echo"<br/>".$set_val;
		}
	}
$i=1;
$fac_name="";
$sub_name="";
$res=mysql_query("select * from faculty_assign where paper_code='".$code."'",$conn);
	if($r=mysql_fetch_array($res))
	{
		$fac_name=$r['faculty_name'];
		$sub_name=$r['paper_name'];
	}
	
	
	$res=mysql_query("select * from assignment where file_no='".$fno."' and  paper_code='".$code."'",$conn);
	echo "<table align=center><tr><td colspan=7>".$assign."-".$sub_name."<br/></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td>".$set."<br/><br/></td></tr></table>";
	while($r=mysql_fetch_array($res))
	{
	echo "<table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Que ".$i.": </td><td>".$r['question']."</td></tr>";
	$i++;
	}
  echo "</table>";
  ?>
  <br />
  <table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Submit to:</td><td></td><td><?php echo $fac_name; ?></td></tr>
  <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="12">Last Date of Submission : 30/04/2014</td></tr></table>
  <br />
  <a href="instruction/AssignmentRules.pdf" target="_blank">Instruction</a><br />
  <a href="instruction/Assignment.doc">Front Page Format</a><br />
  <a href="instruction/Index.doc">Index</a><br />
  
<p><a href="javascript:window.print()"><div align="right">Print</div></a></p>
</td></tr></table>
</body>
</html>
