<style type="text/css">
a{text-decoration:none;}
</style>
<?php
if($_POST['fac_id']=='')
{$fac_id=$_REQUEST['fac_id'];}
else
{$fac_id=$_POST['fac_id'];}

if($_POST['code']=='')
{$code=$_REQUEST['code'];}
else
{$code=$_POST['code'];}

if($_POST['course']=='')
{$course=$_REQUEST['course'];}
else
{$course=$_POST['course'];}

if($_POST['sem']=='')
{$sem=$_REQUEST['sem'];}
else
{$sem=$_POST['sem'];}

try
{
//include('dblocal.php');
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
$rs=mysql_query("select distinct(paper_name) from faculty_assign where paper_code='".$code."'",$conn);
while($r=mysql_fetch_array($rs))
{$paper=$r['paper_name'];}					 
echo "<table><tr><td>".$course."</td><td>".$sem."</td></tr><tr><td colspan='2'>".$paper."</td></tr>";
echo "<tr><td>S.No.</td><td>File No.</td><td colspan='4'>Action</td></tr>";
$sn=1;
$res=mysql_query("select distinct(file_no) from assignment where paper_code='".$code."'",$conn);
while($row=mysql_fetch_array($res))
{
echo "<tr><td>".$sn."</td><td><a href=displayassign.php?file_no=".$row['file_no']."&assign=".$code." target='blank'>".$row['file_no']."</a></td><td><a href=displayassign.php?file_no=".$row['file_no']."&assign=".$code." target='blank'>View</a></td><td>/</td><td><a href=editassign.php?file_no=".$row['file_no']."&assign=".$code." target='blank'>Edit</a></td><td>/</td><td><a href=delassign.php?file_no=".$row['file_no']."&assign=".$code.">Delete</a></td></tr>";
$sn=$sn+1;
}
echo "</table>";
}
catch(Exception $e)
{
	echo $e."";
}	
									
									
?>
						