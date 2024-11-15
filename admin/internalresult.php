<?php
$course=$_POST['course'];
	$sem=$_POST['sem'];
	$internal=$_POST['internal'];
	$code=$_POST['code'];
	echo "Course&nbsp;:&nbsp;".$course."&nbsp;".$sem."Sem<br />";
	echo "Internal&nbsp;:&nbsp;".$internal."<br />";
	echo "Paper Code&nbsp;:&nbsp;".$code."<br />";
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	echo "<table border='1'><tr><td>File No</td><td>Marks</td><td>Edit</td></tr>";
	$col=mysql_query("select * from internal_record where sem='".$sem."' and course='".$course."' and internal='".$internal."' and paper_code='".$code."'",$conn);
						 
						 while($row=mysql_fetch_array($col,MYSQL_ASSOC))
						 {
						 	echo "<tr><td align=center>".$row['file_no']."</td><td align=center>".$row['marks']."</td><td><a href='edit_marks.php?file_no='".$row['file_no'].">Edit</a></td></tr>";
						 }
						 echo "</table>";
						 ?>