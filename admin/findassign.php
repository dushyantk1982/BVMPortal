<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.png" />

<style type="text/css">
<!--
.style17 {
	color: #003333;
	font-size: 24px;
}
-->
</style>

</head>

<body>
<table width="100%" align="center">

<td width="90%" valign="middle" ><div align="center">
  
</div> </td></table>
<div class="style2" id="Layer4">
<form action="displayassign.php" method="post" target="_blank" >
                          <table width="100%" align="center" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="3"><h3 class="style16 style17"><u>Assignment</u></h3>
                            </td>
                          </tr>
						  <tr>
                            <td width="28%"><div align="center" class="style30"></div></td>
                              <td>
                              	<select name="assign" id="assign">
									<option value="">Select Course</option>
									<option value="MBA">MBA</option>
									<option value="MCA">MCA</option>
									<option value="BBA">BBA</option>
									<option value="BCA">BCA</option>
									<option value="BCA(M)">BCA(M)</option>
								</select></td></tr>
								<tr><td><select name="sem" id="sem">
									<option value="">Select Sem</option>
									<option value="1">I</option>
									<option value="2">II</option>
									<option value="3">III</option>
									<option value="4">IV</option>
									<option value="5">V</option>
									<option value="6">VI</option>
								</select></td></tr>
								<tr><td><select name="paper_code" id="paper_code">
									<option value="">Paper Code</option>
									<?php 
									$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
									if(!$conn){die('Could not connect:'.mysql_error());}
									mysql_select_db('bvmgroup_bvmclg');
									$res=mysql_query("select * from assignment",$conn);
									while($r=mysql_fetch_array($res))
									{
										echo "<option value='".$r['paper_code']."'>'".$r['paper_code']."'</option>";
									}
									?>
								</select></td></tr>
							  
                        </form>
    </div>
						
			</body></td></tr></table>
</body>
</html>
