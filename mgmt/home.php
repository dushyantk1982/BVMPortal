<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style8 {
	font-size: 18px;
	color: #003333;
}
-->
</style>
</head>

<body>
<?php

//@$from=$_POST['from'];
@$to=date("Y-m-d");

@$dbhost = 'localhost';
@$dbuser = 'bvmgroup_userbvm';
@$dbpass = 'dushyant12428';
mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());

mysql_select_db('bvmgroup_bvmclg');
//@$sql ="select * from enquiry where Date between '$from' and '$to';";
@$sql ="select * from enquiry where Date='".$to."'";
//echo "select * from enquiry where Date between '$from' and '$to';";


@$retval = mysql_query( $sql);
if($retval)
{
echo "Date : $to <br />";
echo "<table width='100%' border='1' cellpadding='2'>".
  "<tr>".
    "<td align='center'><b>Name</b></td>".
    "<td align='center'><b>Email</b></td>".
    "<td align='center'><b>Course</b></td>".
    "<td align='center'><b>Contact</b></td>".
    "<td align='center'><b>Query</b></td>".
  "</tr>";
while($row=mysql_fetch_array($retval))
{
echo"<tr>".
    "<td>$row[1]</td>".
    "<td>$row[5]</td>".
    "<td>$row[4]</td>".
    "<td>$row[2]</td>".
    "<td>$row[6]</td>".
	"</tr>";

}
echo "</table>";

}
else{
echo "Sorry no record found to ".$to;}
mysql_close();
 
 
?>
<!--<div align="center"><img src="images/18.JPG" height="400" width="650" /></div>-->
</body>
</html>
