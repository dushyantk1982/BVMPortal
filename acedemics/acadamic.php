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
body {
	background-image: url(../images/wall5.jpg);
}
#Layer1 {
	position: relative;
	width:100%;
	z-index:2;
	background-color: #CCCCCC;
	margin-top:2;
	margin-left:2;
	margin-bottom:2
	left: 0;
	top: 0;
}
#Layer2 {
	position: absolute;
	z-index: 0;
	left: 0;
	height: 700;
	top: 1;
	clip: rect(1,auto,auto,1);
	width: 100%;
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
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FFFF99;
}
-->
</style>
<link href="css/first.css" rel="stylesheet" type="text/css" />
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
	background-image: url(images/tabback.jpg);
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
	background-image: url(images/contact_us_right.gif);
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
.style6 {color: #000033; font-size: 14px; }
.style8 {font-size: 14px}
.style9 {color: #000033; font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body>

<div id="Layer2">
  <table width="100%" align="center">
    <tr  >
      <td width="5%"  >&nbsp;</td>
      <td width="90%"   bgcolor="#5671A3" style="border-bottom:thick;border-bottom-color:#5671A3"><div align="center">
        <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="100%" height="75" align="middle">
          <param name="src" value="../images/bvm.swf" />
          <embed src="../images/bvm.swf" width="100%" height="75" align="middle" pluginspage="http://www.macromedia.com/shockwave/download/"></embed>
        </object><br />
        <script src="../images/xaramenu.js"></script>
            
            <script Webstyle4 src="../images/contact_us.js"></script>
      </div></td>
      <td width="5%" >&nbsp;</td>
    </tr>
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="90%" ><table width="100%" align="center">
        <tr>
          <td><div id="Layer1" align="center">
        <table width="100%" align="center" background="../images/JU.png">
          <tr>
            <td width="16%" height="35" background="../images/tabback.jpg" bgcolor="#FFFFFF" style="border:inset;"></td>
            <td height="27" rowspan="3" valign="top" bgcolor="#FFFFFF" style="border-left-color:#3399FF;"><?php 
			if(@$_REQUEST['id']==1)
			{?>
              <iframe height="500" width="100%" src="program.php" name="admission"></iframe>
              <?php
			}
			else if(@$_REQUEST['id']==2)
			{?>
              <iframe height="500" width="100%" src="calender.php" name="admission"></iframe>
			<?php }
			else if(@$_REQUEST['id']==3)
			{?><iframe height="500" width="100%" src="apply.php" name="admission"></iframe>
			<?php }
			else if(@$_REQUEST['id']==4)
			{?><iframe height="500" width="100%" src="teaching.php" name="admission"></iframe>
			<?php }
			else if(@$_REQUEST['id']==5)
			{?><iframe height="500" width="100%" src="brochure.php" name="admission"></iframe>
			<?php }	
			else if(@$_REQUEST['id']==6)
			{?><iframe height="500" width="100%" src="../addmission/bed.php" name="admission"></iframe>
			<?php }	
			else if(@$_REQUEST['id']==7)
			{?><iframe height="500" width="100%" src="../addmission/ded.php" name="admission"></iframe>
			<?php }	
			else if(@$_REQUEST['id']==5)
			{?><iframe height="500" width="100%" src="../addmission/ntt.php" name="admission"></iframe>
			<?php }									
			else
			{?><iframe height="500" src="program.php" width="100%" name="admission" ></iframe><?php }?>			<div align="center"></div></td>
            </tr>
          <tr>
            <td height="425" style="margin-top:-25"> <p align="center"><a href="program.php" target="admission" class="style6" ><strong>Programs</strong></a></p>
                <p align="center"><a href="calender.php" target="admission" class="style9" >Calendar</a></p>
                <p align="center"><a href="apply.php" target="admission" class="style9" >Apply</a></p>
                <p align="center" class="style8"><a href="teaching.php" target="admission" ><strong>Teaching Methodology </strong></a></p>
                <p align="center" class="style8"><a href="brochure.php" target="admission" ><strong>Brochure</strong></a></p>
                <div align="center"></div>                <div align="center"></div></td>
            </tr>
          
          
          <tr bgcolor="#FFFFFF">
            <td height="35" background="../images/tabback.jpg" style="border:inset;">&nbsp;</td>
            </tr>
          <tr bgcolor="#FFFFFF" background="../images/MoreWorms.jpg">
            <td height="35" colspan="2"><div align="center"><span class="style1">About us | Admissions | Links | Careers | Route Map | Downloads | Gallery | Newsletter | </span></div></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25" colspan="2"><div align="center" class="style5">copyright@ <u><strong>BVM Group of Colleges</strong></u> </div></td>
          </tr>
        </table>
        </div></td>
        </tr>
      </table></td>
      <td width="5%"><div id="Layer7">
        <div align="center"><img src="../images/mailbox.png" width="73" height="65" border="0" longdesc="www.mail.google.com/bvmgroup.org" /><br /></div>
      </div>
      <div id="Layer8">
        <div align="center">
          <p>&nbsp;</p>
          <p><img src="../images/fb.png" width="65" height="65" border="0" /></p>
        </div>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
