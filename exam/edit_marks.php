<html>
<body>

<form action="edit_marks.php?id=edit_marks" method="post">
<center>
File No<input type="text" name="file_no" /><input type="submit" name="submit" value="Find" />
<br />

<!--<input type="text" name="paper_code" /><input type="submit" name="submit" value="Find" />
--></center>
</form>

<?php
if($_REQUEST['submit']=='Find')
{
	extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	echo "<center><form action='edit_marks.php?id=edit_marks' method='post'>";
	$res_paper=mysql_query("select distinct(paper_code) from internal_record where file_no='".$file_no."'",$conn);
	echo "<input type='text' name='file_no' value='".$file_no."' readonly='yes' /><br /><select name='paper_code'><option value=''>--Select Paper Code--</option>";
	while($rp=mysql_fetch_array($res_paper))
	{
		echo "<option value='".$rp['paper_code']."'>".$rp['paper_code']."</option>";
	}
	
	
	echo "<input type='submit' name='submit' value='Edit'>";
	echo "</form></center>";
	//mysql_close();
}

if($_REQUEST['submit']=='Edit')
{
extract($_POST);
	
	echo "<center><form action='edit_marks.php?id=edit_marks' method='post'>";
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	echo "File No&nbsp;<input type='text' name='file_no' value='".$file_no."' readonly='yes' /><br />Paper Code&nbsp;<input type='text' name='paper_code' value='".$paper_code."' readonly='yes' />&nbsp;";
	
	$res_marks=mysql_query("select * from internal_record where file_no='".$file_no."' and paper_code='".$paper_code."'",$conn);
	while($rm=mysql_fetch_array($res_marks))
	{
		echo "<input type='text' name='marks' value=".$rm['marks']." />";
	}
	echo "<input type='submit' name='submit' value='Submit'>";
	echo "</form></center>";

	
}

if($_REQUEST['submit']=='Submit')
{
extract($_POST);
		
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	
	mysql_query("update internal_record set marks='".$marks."' where file_no='".$file_no."' and paper_code='".$paper_code."'",$conn);
	header("location:edit_marks.php?msg=ok");
	
}

if($_REQUEST['msg']=='ok')
{echo "<center>Marks Updated Successfully!</center>";}
					 
	
	//mysql_query("update internal_record set marks='".$marks[]."' where file_no='".$file_no."' and paper_code='".$paper_code[]."'",$conn);
	//header("location:edit_marks.php?msg=ok");
	


//if($_REQUEST['msg']=='ok')
//{echo "Marks edited successfully!";}

?>		

<?php
/*if($_REQUEST['submit']=='Find')
{
	extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	echo "<form action='edit_marks.php?id=edit_marks' method='post'>";
	$res=mysql_query("select * from internal_record where file_no='".$file_no."'",$conn);
	echo "<table><tr><td>Paper Code</td><td>Marks</td></tr>";
	while($r=mysql_fetch_array($res))
	{
		echo "<tr><td><input type='text' name='paper_code[]' readonly='yes' value=".$r['paper_code']." /></td><td><input type='text' name='marks[]' value=".$r['marks']." />";
	}
	
	echo "</table>";
	echo "<input type='hidden' name='file_no' value=".$file_no.">";
	echo "<input type='submit' name='submit' value='Edit'>";
	echo "</form>";
	//mysql_close();
}

if($_REQUEST['submit']=='Edit')
{
	extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	mysql_query("update internal_record set marks='".$marks[]."' where file_no='".$file_no."' and paper_code='".$paper_code[]."'",$conn);
	//header("location:edit_marks.php?msg=ok");
	
}

//if($_REQUEST['msg']=='ok')
//{echo "Marks edited successfully!";}
*/
?>		
		
</body>
</html>