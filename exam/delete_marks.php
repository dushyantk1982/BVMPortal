<html>
<body>
<form action="delete_marks1.php" method="post" name="export_excel">
<center>
<?php
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	if($_REQUEST['cat']=='session')
	{
	echo "<select name='session'>";
	$sessions=mysql_query('select distinct(session) from internal_record',$conn);
	while($ses=mysql_fetch_array($sessions))
	{
		echo "<option value='".$ses['session']."'>".$ses['session']."</option>";
	}
	echo "</select>";
	}
	
	else if($_REQUEST['cat']=='course')
	{
	$courses=mysql_query('select distinct(course) from internal_record',$conn);
	echo "<select name='course'><option value=''>--Select Course--</option>";
	while($c=mysql_fetch_array($courses))
	{	
		echo "<option value='".$c['course']."'>".$c['course']."</option>";
	}
	echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	$internals=mysql_query('select distinct(internal) from internal_record',$conn);
	echo "<select name='internal'><option value=''>--Select Internal--</option>";
	while($i=mysql_fetch_array($internals))
	{
		echo "<option value='".$i['internal']."'>".$i['internal']."</option>&nbsp;&nbsp;";
	}
	echo "</select>";
	}
	
	else if($_REQUEST['cat']=='internal')	
	{
	$internals=mysql_query('select distinct(internal) from internal_record',$conn);
	echo "<select name='internal'><option value=''>--Select Internal--</option>";
	while($i=mysql_fetch_array($internals))
	{
		echo "<option value='".$i['internal']."'>".$i['internal']."</option>&nbsp;&nbsp;";
	}
	echo "</select>";
	}
	
	else if($_REQUEST['cat']=='subject')
	{
	
	echo "<select name='code'><option value=''>--Select Subject Code--</option>";
	$codes=mysql_query('select distinct(paper_code) from internal_record',$conn);
	while($pc=mysql_fetch_array($codes))
	{
		echo "<option value='".$pc['paper_code']."'>".$pc['paper_code']."</option>";
	}
	echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	$internals=mysql_query('select distinct(internal) from internal_record',$conn);
	echo "<select name='internal'><option value=''>--Select Internal--</option>";
	while($i=mysql_fetch_array($internals))
	{
		echo "<option value='".$i['internal']."'>".$i['internal']."</option>&nbsp;&nbsp;";
	}
	echo "</select>";
	}
	
	else
	{
		echo "<select name='file_no'><option value=''>--Select File No--</option>";
	$files=mysql_query('select distinct(file_no) from internal_record',$conn);
	while($f=mysql_fetch_array($files))
	{
		echo "<option value='".$f['file_no']."'>".$f['file_no']."</option>";
	}
	echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	echo "<select name='code'><option value=''>--Select Subject Code--</option>";
	$codes=mysql_query('select distinct(paper_code) from internal_record',$conn);
	while($pc=mysql_fetch_array($codes))
	{
		echo "<option value='".$pc['paper_code']."'>".$pc['paper_code']."</option>";
	}
	echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	$internals=mysql_query('select distinct(internal) from internal_record',$conn);
	echo "<select name='internal'><option value=''>--Select Internal--</option>";
	while($i=mysql_fetch_array($internals))
	{
		echo "<option value='".$i['internal']."'>".$i['internal']."</option>&nbsp;&nbsp;";
	}
	echo "</select>";
	}
	
	mysql_close();
	echo "<input type='submit' name='submit' value='Delete' />";
	
	?>
	</center>
	</form>
	
