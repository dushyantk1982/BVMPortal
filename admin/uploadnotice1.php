<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BVM Colleges of Teacher Education - Gwalior</title>
</head>
<body>
<h2>Notice Update</h2>
<form action="uploadnotice.php" method="post" enctype="multipart/form-data">
	<input type="text" name="date" value="<?php 
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 echo $date->format('d-m-Y'); ?>" size="1">	
	<input type="text" name="year" value="<?php echo date('Y'); ?>" size="1">
	<br /><br />
	<input type="radio" name="dept" value="IT">IT Department<br />
	<input type="radio" name="dept" value="MGMT">Management Department<br />
	<input type="radio" name="dept" value="BOTH">Both Departments<br />
	<input type="radio" name="dept" value="FRONT">Front Side Only<br />
	<input type="radio" name="dept" value="ALL">ALL Departments<br /><br />
  File Description: <input type="text" name="message"><br /><br />
  Get Notice: <input type="file" name="uploadFile"><br /><br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Upload File">
</form>
</body>
</html>
