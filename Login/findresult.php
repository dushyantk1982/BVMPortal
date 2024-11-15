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
<?php
	session_start();
	$_POST['course']=$course;
	$_POST['sem']=$sem;
	$_POST['internal']=$internal;
	$_POST['fileno']=$fileno;
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="internalresult.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
                         <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%"><select name="course" id="course">
                                  <option value="">-------Select-------</option>
								  <option value=MBA>MBA</option>
                                  <option value=MCA>MCA</option>
                                  <option value=BBA>BBA</option>
                                  <option value=BCA>BCA</option>
                                </select>                              </td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Semester</div></td>
                              <td width="100%"><select name="sem" id="sem">
                                  <option value="">-------Select-------</option>
								  <option value="I">I Sem</option>
                                  <option value="II">II Sem</option>
                                  <option value="III">III Sem</option>
                                  <option value="IV">IV Sem</option>
								  <option value="V">V Sem</option>
								  <option value="VI">VI Sem</option>
                                </select>                              </td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Internal</div></td>
                              <td width="100%"><select name="internal" id="internal">
                                <option value="">-------Select-------</option>
								<option value=First>First</option>
                                <option value=Second>Second</option>
                                <option value=Third>Third</option>
                              </select></td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">File No</div></td>
                              <td width="100%"><label>
                                <input name="fileno" type="text" id="fileno" maxlength="10"  />
                              </label></td>
                            </tr>
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                  <input name="ok" type="submit" class="style30" value="Click to Result" />
                              </div></td>
                            </tr>
                          </table>
                        </form>
                        
                        </div>
</body>
</html>
