<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style7 {font-size: 24px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #003333;font-weight:900;}
-->
</style>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery.validate.js" type="text/javascript"></script>
<script src="script.js"></script>
<style>
.cls1{color:red;}
</style>
<script>
function fun1()
{
	$("#form1").validate({errorClass:'cls1'})
}
</script>

<body onLoad="fun1()">

 <p>&nbsp;</p>
<form name="contactform" method="post" action="enquiryform2.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
</body>
</html>