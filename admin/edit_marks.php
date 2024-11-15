<?php
$course=$_POST['course'];
	$sem=$_POST['sem'];
	$internal=$_POST['internal'];
	$code=$_POST['code'];
	$file_no=$_POST['file_no'];
	echo "<form action='edit_marks.php?id=edit_marks' method='post'>Course&nbsp;:&nbsp;".$course."&nbsp;".$sem."Sem<br />";
	echo "File No&nbsp;:&nbsp;".$file_no."<br />";
	echo "Internal&nbsp;:&nbsp;".$internal."<br />";
	echo "Paper Code&nbsp;:&nbsp;".$code."<br />";
	echo "Edit Marks&nbsp;<input type='text' name='marks'/><br/>";
	echo "<input type='hidden' name='course' value='".$course."'/>";
	echo "<input type='hidden' name='sem' value='".$sem."'/>";
	echo "<input type='hidden' name='internal' value='".$internal."'/>";
	echo "<input type='hidden' name='code' value='".$code."'/>";
	echo "<input type='hidden' name='file_no' value='".$file_no."'/>";
	echo "<input type='submit' name='submit' value='Submit' /></form>";
	
	if($_REQUEST['submit']=='submit')
	{
	$course=$_POST['course'];
	$sem=$_POST['sem'];
	$internal=$_POST['internal'];
	$code=$_POST['code'];
	$file_no=$_POST['file_no'];
	$marks=$_POST['marks'];
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	//echo "<table border='1'><tr><td>File No</td><td>Marks</td><td>Edit</td></tr>";
	$col=mysql_query("update internal_record set marks='".$marks."' where file_no='".$file_no."' sem='".$sem."' and course='".$course."' and internal='".$internal."' and paper_code='".$code."'",$conn);
						 
						 
			
						 }
						 ?>