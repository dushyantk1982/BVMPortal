<?php
		extract($_POST);
echo "<form action='preview.php' target='_blank'>";
	echo "<input type='hidden' name='session' value='".$session."' /><input type='hidden' name='course' value='".$course."' /><input type='hidden' name='sem' value='".$sem."' /><input type='hidden' name='code' value='".$code."' /><input type='hidden' name='internal' value='".$internal."' /><input type='submit' name='submit' value='Print Preview' /></form>";
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
	
	
	//echo "<a href='preview.php?session='".$session."'&course='".$course."'&sem='".$sem."'&paper_code='".$code."'&internal='".$internal."' target='_blank'>Click to Preview</a>";
	
?>
						
