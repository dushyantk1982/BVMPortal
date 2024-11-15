<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BVM Colleges of Teacher Education - Gwalior</title>
</head>
<body>
<h2>Notice Update</h2>
<form action="upload_exam_paper.php" method="post" enctype="multipart/form-data">
	Date:<input type="text" name="date" value="<?php 
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 echo $date->format('d-m-Y'); ?>" size="6"><br /><br />	
	Year:<input type="text" name="year" value="<?php echo date('Y'); ?>" size="1">
	<br /><br />
	
  Paper Name: <input type="text" name="paper_name"><br /><br />
  Course: <select name="course">
  				<option value="">--Select--</option>
				<option value="MBA">MBA</option>
				<option value="BBA">BBA</option>
				<option value="MCA">MCA</option>
				<option value="BCA">BCA</option>
				<option value="BCA(M)">BCA(M)</option>
			</select>
	Sem: <select name="sem">
  				<option value="">--Select--</option>
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
				<option value="5">V</option>
				<option value="6">VI</option>
			</select>
			<br /><br />
  Get Paper: <input type="file" name="uploadFile"><br /><br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Upload File">
</form>
</body>
</html>
