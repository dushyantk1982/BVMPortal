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
.style13 {color: #990000}
.style14 {
	font-family: "Times New Roman", Times, serif;
	color: #990000;
}
-->
</style>

</head>

<body>
<!--<div id="top" style="margin-left:10%;margin-right:10%;height:450;top:-5;background-image:url(images/newback.jpg);">
  <div align="center" style="background-image:url(images/tabback.jpg);">
    <?php //include("header.php"); ?>
  </div>-->
   <form action="chkstlogin.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                       
<table width="90%" align="center" background="images/tabback.jpg" >
  <tr>
    <td width="85%" align="left" valign="top" ><div align="center"><img src="images/logo.jpg" width="9%" height="65" /><img src="images/newlogo.png" width="89%" height="65" /></div></td>
  </tr>
</table>


<table width="90%" align="center" bordercolor="#A8B1DE" background="images/NEWSIDE.png">
          <tr valign="top" background=>
            <!--<td width="14%" valign="middle" ><div align="center"></div> <p align="center"></p></td>-->

<td width="90%" valign="middle" ><div align="center">
  
  <body>
</div> 
<div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                          <table width="30%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9"><h3 class="style13">STUDENT LOGIN </h3>
                            </td>
                          </tr>
						  <tr><td align="center" colspan="9"><h3 class="style13">
						  <!-- Enter the session in value in inout type -->
						  			  
						  
						  <tr>
                            <td width="19%"><div align="center" class="style30">Login</div></td>
                              <td width="30%">
                                <input name="fileno" type="text" id="fileno" maxlength="10"  />
                            </td></tr>
                           <tr>
                            <td width="19%"><div align="center" class="style30">Password</div></td>
                              <td width="30%">
                                <input name="pwd" type="password" id="pwd" maxlength="10"  />
                            </td></tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                  <h3>
                                    <input name="ok" type="submit" class="style30" value="Sign In" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="../index.php"><span class="style14 style13">Exit</span></a></h3>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="changepwd.php"><span class="style14 style13">Change Password</span></a></h3>
                                  
								  </td></tr></table>
								  <div align="center"><?php if(@$_REQUEST['msg']=='success')
		{
		echo "Password Changed Successfully";
		
		}
		else if(@$_REQUEST['msg']=='error')
		{
		echo "File No or Password is incorrect";
		}
		?></div>

                                  <p>&nbsp;</p>
								  <p>&nbsp;</p>
								  <p>&nbsp;</p>
								  <p>&nbsp;</p><p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                 <div>
        
    </div>
                              </div></td>
                            </tr>
                          </table>
                       
    </div>
 </form>
	
	<!-- Start counter code -->

<a href="http://www.roulette-vs-blackjack.dk/" target="blank" >
<img alt="Website counter" hspace="0" vspace="0" border="0" src="http://www.tucantrafficmonitor.com/7360719-311388FFC92DB2466B3B460AA30DE546/counter.img?theme=1&digits=7&siteId=6"/>
</a>
<noscript><br/><a href="http://www.roulette-vs-blackjack.dk/">www.roulette-vs-blackjack.dk</a><br>The following text will not be seen after you upload your website, please keep it in order to retain your counter functionality <br> <a href="http://www.thebestcities.net/" target="_blank">the best cities</a></noscript>

<!-- End counter code -->
						
			</td></tr></table>
</body>
</html>
