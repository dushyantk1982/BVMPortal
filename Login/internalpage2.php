<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />
</head>

<link href="Untitled-2.css" rel="stylesheet" type="text/css"></head>
<div id="top">
  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="100%" height="65">
    <param name="src" value="../images/bvm.swf">
    <embed src="../images/bvm.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="100%" height="65"></embed>
  </object>
 
<body>
<?php
	//session_start();
	$sem=$_COOKIE["sem"];
	$a=$_COOKIE["course"];
	$inter=$_COOKIE["internal"];
	$yr=$_COOKIE["year"];
	?>

<div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="sendmarks.php" method="post" onsubmit="MM_validateForm('fileno','','RisNum','name','','R','code1','','RisNum','c1int','','RisNum','code2','','RisNum','c2int','','RisNum','code3','','RisNum','c3int','','RisNum','code4','','RisNum','c4int','','RisNum','code5','','RisNum','c5int','','RisNum','code6','','RisNum','c6int','','RisNum','code7','','RisNum','c7int','','RisNum');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">INTERNAL MARKS</td></tr>
                 			<tr><td><input type="hidden" name="selcourse" id="selcourse" value="<?php echo $a;?>"  /></td><td><input type="hidden" name="selsem" id="selsem" value="<?php echo $sem;?>"  /></td><td><input type="hidden" name="selinternal" id="selinternal" value="<?php echo $inter;?>"  /></td><td><input type="hidden" name="selyear" id="selyear" value="<?php echo $yr;?>"  /></td></tr>
							<tr>
                              <td align="right" width="30%"><div align="right" class="style30">File No</div></td>
                              <td width="70%"><label>
                                <input name="fileno" type="text" id="fileno" maxlength="10" />
                              </label></td>
                            </tr>
							
                            </table>
                           <table table width="20%" align="center" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr>
                             <!-- <table width="20%" align="center" border="1" bordercolor="#000000" bgcolor="#FFFFFF">--><tr><td><div align="center" class="style30">Subject<br/>Code</div></td>
							 
		
		<?php
		if((strcmp($sem,'I'))==0)
		{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=101  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=102  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=103  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=104  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=105  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=106  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=107  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}
			elseif((strcmp($sem,'II'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=201  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=202  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=203  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=204  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=205  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=206  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=207  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}
			elseif((strcmp($sem,'III'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=301  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=302  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=303  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=304  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=305  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=306  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=307  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}
			elseif((strcmp($sem,'IV'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=401  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=402  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=403  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=404  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=405  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=406  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=407  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}
	elseif((strcmp($sem,'V'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=501  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=502  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=503  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=504  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=505  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=506  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=507  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}
			elseif((strcmp($sem,'VI'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td><input type=text name=code value=601  size=3 maxlength=3 readonly=true></td>";
			}
			if ($x=2)
				{
		echo"<td><input type=text name=code value=602  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=3)
				{
			echo"<td><input type=text name=code value=603  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=4)
				{
			echo"<td><input type=text name=code value=604  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=5)
				{
			echo"<td><input type=text name=code value=605  size=3 maxlength=3 readonly=true></td>";
				}
			if ($x=6)
				{
			echo"<td><input type=text name=code value=606  size=3 maxlength=3 readonly=true></td>";
				}
				if ($x=7)
				{
			echo"<td><input type=text name=code value=607  size=3 maxlength=3 readonly=true></td>";
		}
			}
		}

		
		?></tr> <tr><td><div align="center" class="style30">Internal<br/>Marks</div></td>
         						 <td width="100%" align="center"><label>
                        	<input name="codes1" type="text" id="c1int" size="2" maxlength="2" />
                         </label></td>
	
						 <td width="100%" align="center"><label>
                        	<input name="codes2" type="text" id="c2int" size="2" maxlength="2" />
                         </label></td>
	
						 <td width="100%" align="center"><label>
                        	<input name="codes3" type="text" id="c3int" size="2" maxlength="2" />
                         </label></td>
     
						 <td width="100%" align="center"><label>
                        	<input name="codes4" type="text" id="c4int" size="2" maxlength="2" />
                         </label></td>
	
						 <td width="100%" align="center"><label>
                        	<input name="codes5" type="text" id="c5int" size="2" maxlength="2" />
                         </label></td>						
						 <td width="100%" align="center"><label>
                        	<input name="codes6" type="text" id="c6int" size="2" maxlength="2" />
                         </label></td>
	
						 <td width="100%" align="center"><label>
                        	<input name="codes7" type="text" id="c7int" size="2" maxlength="2" />
                         </label></td></tr>
							
				   <tr></table></tr>
                              <table align="center"><td align="center"><div align="center" class="style31">
                                  <input name="ok" type="submit" class="style30" value="Submit" />
                              </div></td>
							  <td><div align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="resetcookie.php">Reset</a></td>
                            </tr>
                          </table>
                        </form>
                        
                        </div>
						
</body>
</html>
