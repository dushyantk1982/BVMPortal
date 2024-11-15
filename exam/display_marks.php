<html>
<body>
<form action="display_marks1.php" method="post" name="export_excel">
<center>
<?php
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	echo "<select name='session'>";
	$sessions=mysql_query('select distinct(session) from internal_record',$conn);
	while($ses=mysql_fetch_array($sessions))
	{
		echo "<option value='".$ses['session']."'>".$ses['session']."</option>";
	}
	echo "</select><br />";

	$courses=mysql_query('select distinct(course) from internal_record',$conn);
	while($c=mysql_fetch_array($courses))
	{
		echo $c['course']."<input type='radio' name='course' value='".$c['course']."' />&nbsp;&nbsp;";
	}
	echo "<br />";
		
	echo "<select name='sem'><option value=''>--Select--</option>";
	$sems=mysql_query('select distinct(sem) from internal_record',$conn);
	while($s=mysql_fetch_array($sems))
	{
		echo "<option value='".$s['sem']."'>".$s['sem']."</option>";
	}
	echo "</select><br />";
	
	echo "<select name='code'><option value=''>--Select--</option>";
	$codes=mysql_query('select distinct(paper_code) from internal_record',$conn);
	while($pc=mysql_fetch_array($codes))
	{
		echo "<option value='".$pc['paper_code']."'>".$pc['paper_code']."</option>";
	}
	echo "</select><br />";
	
	$internals=mysql_query('select distinct(internal) from internal_record',$conn);
	while($i=mysql_fetch_array($internals))
	{
		echo $i['internal']."<input type='radio' name='internal' value='".$i['internal']."' />&nbsp;&nbsp;";
	}
	echo "<br />";
	mysql_close();
	echo "<input type='submit' name='submit' value='Display' />";
	
	?>
	</center>
	</form>
	
<?php
	
	if($_REQUEST['submit']=='Display')
	{
		extract($_POST);
		$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());		
		$res=mysql_query("select * from internal_record where session='".$session."' and course='".$course."' and sem='".$sem."' and paper_code='".$code."' and internal='".$internal."'",$conn);
	echo "<center>";
	echo $course."&nbsp;-&nbsp;".$session."<br />".$sem."&nbsp;Semester<br />".$internal."&nbsp;Internal - &nbsp;".$code."</center>";
	echo "<table border=1 align='center'><tr><td align='center'>File No.</td><td align='center'>Name</td><td align='center'>Marks</td></tr>";
	
	while($r=mysql_fetch_array($res))
	{
		$result=mysql_query("select * from student_reg where file_no='".$r['file_no']."'");
		while($rs=mysql_fetch_array($result))
		{
			echo "<tr><td align='center'>".$r['file_no']."</td><td>".$rs['st_name']."</td><td align='center'>".$r['marks']."</td></tr>";
		}
	}
	echo "</table>";
	echo "<center><form action='preview.php' target='_blank'>";
	echo "<input type='hidden' name='session' value='".$session."' /><input type='hidden' name='course' value='".$course."' /><input type='hidden' name='sem' value='".$sem."' /><input type='hidden' name='code' value='".$code."' /><input type='hidden' name='internal' value='".$internal."' /><input type='submit' name='submit' value='Preview' /></form></center>";
	
	//echo "<a href='preview.php?session='".$session."'&course='".$course."'&sem='".$sem."'&paper_code='".$code."'&internal='".$internal."' target='_blank'>Click to Preview</a>";
	}
?>
						
		
</body>
</html>