<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BVM Colleges of Teacher Education - Gwalior</title>
</head>
<body>
<?php
	$fac_id=$_REQUEST['fac_id'];
?>

<h2>Upload Question Bank</h2>
<br />
<h4 style="color:#FF0000;">Note: Please Save the qb with their paper code.</h4>
<form action="upload_qb.php" method="post" enctype="multipart/form-data">
	<input type="text" name="date" value="<?php 
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 echo $date->format('d-m-Y'); ?>" size="10" readonly="yes">	
	<select name="course">
		<option value="">Select Course</option>
		<option value="MBA">MBA</option>
		<option value="MCA">MCA</option>
		<option value="BBA">BBA</option>
		<option value="BCA">BCA</option>
		<option value="BCA(M)">BCA(MCRPV)</option>
	</select>
	<select name="sem">
		<option value="">Select Semester</option>
		<option value="1">I Sem</option>
		<option value="2">II Sem</option>
		<option value="3">III Sem</option>
		<option value="4">IV Sem</option>
		<option value="5">V Sem</option>
		<option value="6">VI Sem</option>
	</select>
	<br /><br />
	<?php
									try
									{
										//include('dblocal.php');
										$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
										mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
										$rs=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
										while($r=mysql_fetch_array($rs))
										{$faculty_name=$r['faculty_name'];}
										echo "<select name='code'><option value=''>Select Paper Code</option>";
										$res=mysql_query("select * from faculty_assign where faculty_name='".$faculty_name."'",$conn);
										while($row=mysql_fetch_array($res))
										{
											echo "<option value='".$row['1']."'>".$row['1']." - ".$row['2']."</option>";
										}
										echo "</select>";
									}
									catch(Exception $e)
									{
										echo $e."";
									}	
									
									
								?>
  <br /><br />
  Get QB: <input type="file" name="uploadFile"><br /><br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Upload File">
</form>
</body>
</html>
