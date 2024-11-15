<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM OFFICE</title>
<link rel="shortcut icon" href="images/logo.png" />
</head>
<?php
session_start();
?>
<html>
<head>
<script>
function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>

<link href="Untitled-2.css" rel="stylesheet" type="text/css"></head>
<div id="top">
  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="100%" height="65">
    <param name="src" value="../images/bvm.swf">
    <embed src="../images/bvm.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="100%" height="65"></embed>
  </object>
  <div id="upper">
    <DIV id="menu">
      <p><?php ?></p>
      <p align="center"><a href="office.php">Home</a></p>
      <p align="center"><a href="office.php?id=enquiry">View Enquiry</a></p>
	  <p align="center"><a href="office.php?id=internalpage1">Internal Marks</a></p>
	  <p align="center"><a href="office.php?id=reg">Student Registration</a></p>
      <p align="center"><a href="office.php?id=logout">Logout</a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </DIV>
    <DIV id="container" name="me">
	<?php if(@$_REQUEST['id']=='enquiry')
	{include("enquiry.php");}
	else if(@$_REQUEST['id']=='internalpage1')
	{include("internalpage1.php");}
	else if(@$_REQUEST['id']=='reg')
	{include("registration.php");}
	else if(@$_REQUEST['id']=='logout')
	{ session_destroy();
	header('location:../index.php');
	?><?php }
	else
	{include("user.html");}?></DIV>
	
  </div>
	
  
</div>

<div id="demo"></div>
<p>&nbsp;</p>
</html>