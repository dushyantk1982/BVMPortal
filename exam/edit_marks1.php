<html>
<body>

<?php
	
	extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	echo "<input type='text' name='file_no' value='".$file_no."' readonly='yes' /><br /><input type='text' name='paper_code' value='".$paper_code."' readonly='yes' />";
	
	$res_marks=mysql_query("select * from internal_record where file_no='".$file_no."' and paper_code='".$paper_code."'",$conn);
	while($rm=mysql_fetch_array($res_marks))
	{
		echo "<input type='text' name='marks' value=".$rm['marks']." />";
	}
	
	/*extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	mysql_query("update internal_record set marks='".$marks."' where file_no='".$file_no."' and paper_code='".$paper_code."'",$conn);
	header("location:edit_marks.php?msg=ok");*/
	
?>		
		
</body>
</html>