<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.png" />

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

#Layer1 {
	position: relative;
	width:100%;
	z-index:2;
	margin-top:2;
	margin-left:2;
	margin-bottom:2
	left: 0;
	top: -3;
}
#Layer2 {
	position: absolute;
	z-index: 0;
	left: 0;
	top: 0;
	width: 100%;
	overflow: visible;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
}
#Layer4 {
	position:relative;
	width:100%;
	height:250;
	z-index:2;
	left: 0px;
	top: -2px;
}
#Layer5 {
	position:relative;
	width:100%;
	height:304px;
	z-index:0;
	left: 0;
	top: 0;
}
.style1 {color: #FFFFFF}
a:link {
	color: #003300;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #000066;
}
-->
</style>
<link href="about us/css/first.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#Layer6 {
	position:relative;
	width:100%;
	z-index:3;
	top: -10;
	left: 0;
	height: 150;
}
#Layer7 {
	position:relative;
	width:100%;
	height:65;
	z-index:5;
	left: 0;
	top: 0;
}
#Layer8 {
	position:relative;
	width:100%;
	height:60;
	z-index:1;
	left: 0;
	top: 0;
	background-image: url(about us/images/tabback.jpg);
}
.style5 {color: #000033}
#Layer9 {
	position:relative;
	width:200px;
	
	z-index:100;
	top: 0px;
	left:0
}
#Layer10 {
	position:relative;
	width:100%;
	z-index:21;
	padding-top:-100;
}
#Layer11 {
	position:relative;
	width:100%;
	z-index:1;
	left: 0;
	top: -5;
}
#Layer12 {
	position:relative;
	width:100%;
	height:80;
	z-index:1;
	left: 0;
	top: 0;
}
#Layer13 {
	position:relative;
	width:190px;
	height:83;
	z-index:2;
	top: -83;
	background-image: url(about us/images/contact_us_right.gif);
	left: 80;
}
#Layer14 {
	position:relative;
	width:191px;
	height:83;
	z-index:2;
	left: 82px;
	top: -83;
	clip: rect(auto,auto,auto,82);
}
#Layer15 {
	position:relative;
	width:100%;
	height:115px;
	z-index:1;
	left: 0;
	top: -10;
}
.style8 {font-size: 14px}
.style12 {color: #003300; font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body>

<div id="Layer2">
  <table width="90%" align="center" background="images/NEWSIDE.png" >
    <tr >
	<td><table width="90%" align="center" background="images/tabback.jpg" >
  <tr>
    <td width="85%" align="left" valign="top" ><div align="center"><img src="images/logo.jpg" width="9%" height="65" /><img src="images/newlogo.png" width="89%" height="65" /></div></td>
  </tr>
</table></td>
	
      <!--<td width="90%" valign="top" background="images/tabback.jpg" ><?php //include("header.php"); ?></td>-->
    </tr>
    <tr valign="top">
      <td width="90%"><table width="100%" align="center">
        <tr valign="top">
          <td><div id="Layer1" align="center">
        <table width="100%" align="center" bordercolor="#A8B1DE" background="images/NEWSIDE.png">
          <tr valign="top" background=>
            <td width="14%" valign="middle" ><div align="center"></div>
			<p align="left"><a href="sthome.php" target="_parent" style="color:#003300;" >Home</a></p>
			<p align="left"><a href="<?php 
			if($cr=='MBA' || $cr=='BBA')
			{echo "mbaupdate.php";}
			else
			{echo "mcaupdate.php";}
			?>" target="about" style="color:#003300;" >Notice</a></p>
			<p align="left" ><a href="dateassign.php" target="_parent" style="color:#003300;" >Assignments</a></p>
			<p align="left" ><a href="qb.php" target="_parent" style="color:#003300;" >Question Bank</a></p>
			<!--<p align="left" ><a href="findassign.php" target="about" style="color:#003300;" >Assignments</a></p>
			<p align="left" ><a href="qb.php" target="_parent" style="color:#003300;" >Question Bank</a></p>-->
			<p align="left"><a href="../_notes/janclc2014.pdf" target="about" style="color:#003300;" >College Calendar</a></p>
			<p align="left"><a href="
			<?php
				if($cr=='MBA' || $cr=='BBA')
					{echo "deptcal/manag2014.pdf";}
				else
				{echo "deptcal/it2014.pdf";}
			?>" target="about" style="color:#003300;" >Depatmental Calendar</a></p>
            <p align="left"><a href="stsyllabus.php" target="_parent" style="color:#003300;" >Syllabus</a></p>
            <!--<p align="left" ><a href="findresult.php" target="_parent" style="color:#003300;" >Results</a></p>-->
			<p align="left" ><a href="resultnotfound.php" target="about" style="color:#003300;" >Results</a></p>
			<p align="left" ><a href="complaint.php" target="about" style="color:#003300;" >Complaint/Query</a></p>
            <p align="left" ><a href="delsession.php" target="_parent" style="color:#660000;" >Logout</a></p>
              <p align="center" >&nbsp;</p>
              <p align="center" >&nbsp;</p>
              <p align="center" >&nbsp;</p>
              <p align="center" >&nbsp;</p>
              <p align="center" >&nbsp;</p>
              <p align="center" ><!--<a href="sthome.php" target="_parent" style="color:#660000;" >Back</a>&nbsp;--></p></td>
            <td width="86%" background="images/newback.jpg" style="border:solid;border-color:#003300;">
			<?php 
			if(@$_REQUEST['id']==1)
			{?>
			<iframe height="500" width="100%" src="institutes.php" name="about"></iframe>
			<?php
			}
			else if(@$_REQUEST['id']==2)
			{?><iframe height="500" width="100%" src="affliation.php" name="about"></iframe>
			<?php }
			else if(@$_REQUEST['id']==3)
			{?>
			<iframe height="500" width="100%" src="reach.php" name="about"></iframe>
			<?php }
			else if(@$_REQUEST['id']==4)
			{?>
			<iframe height="500" width="100%" src="gov.php" name="about"></iframe>
			<?php }
			else if(@$_REQUEST['id']==5)
			{?><iframe height="500" width="100%" src="vision.php" name="about"></iframe>
			<?php }			
			else
			{?><iframe height="500" width="100%" name="about" src="dateassign.php"></iframe>
			<!--<iframe height="500" width="100%" name="about" src="findassign.php"></iframe>--><?php }?>			
</td>
            </tr>
          
          <tr background="images/tabback.jpg" >
            <td height="25" colspan="3" valign="top" ><div align="center">
              <?php //include("footer.php"); ?>
            </div></td>
            </tr>
        </table>
        </div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
