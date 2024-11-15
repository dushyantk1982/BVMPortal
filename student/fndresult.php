<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div id="top" style="margin-left:10%;margin-right:10%;height:450;top:-5;background-image:url(images/newback.jpg);"></div>
  <table width="90%" align="center" background="images/tabback.jpg" >
  <tr>
    <td width="85%" align="left" valign="top" ><div align="center"><img src="images/logo.jpg" width="9%" height="65" /><img src="images/newlogo.png" width="89%" height="65" /></div></td>
  </tr>
</table>
  <!--<div align="center" style="background-image:url(images/tabback.jpg);">
    <?php //include("header.php"); ?>
  </div>-->

<table width="90%" align="center" bordercolor="#A8B1DE" background="images/NEWSIDE.png">
          <tr valign="top" background=>
            <td width="14%" valign="middle" ><div align="center"></div>
			<p align="left"><a href="../update.php" target="about" style="color:#003300;" >Notice</a></p>
			<p align="left" ><a href="#" target="_parent" style="color:#003300;" >Assignments</a></p>
			<p align="left" ><a href="#" target="_parent" style="color:#003300;" >Question Bank</a></p>
			<p align="left"><a href="../_notes/janclc2014.pdf" target="about" style="color:#003300;" >College Calender</a></p>
            <p align="left"><a href="findsyllab.php" target="about" style="color:#003300;" >Syllabus</a></p>
            <p align="left" ><a href="findresult.php" target="_parent" style="color:#003300;" >Results</a></p>
            <p align="left" >&nbsp;</p>
			
            <p>&nbsp;</p>
            <p align="center"><a href="../index.php" target="_parent" style="color:#660000;" >Logout</a></p>
			
			
			</td>

<td width="86%" valign="middle" ><div align="center">
  <?php
	session_start();
	
	$_POST['course']=$cr;
	$_POST['sem']=$sem;
	$_POST['internal']=$internal;
	$_POST['fileno']=$fileno;
	$_POST['ses']=$ses;
?>
  <body>
</div> 
<div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="internalresult.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="3"><h3 class="style13">INTERNAL RESULTS</h3>
                            </td>
                          </tr>
						  <tr><td align="center" colspan="3"><h3 class="style13">
						  <!-- Enter the session in value in inout type -->
						  <input type="hidden" name="ses" value="2014-15" />2014-2015</h3>
						  
						  
						  <tr>
                            <td width="28%"><div align="center" class="style30"></div></td>
                              <td colspan="1" width="37%" align="center"><label>
                                <?php 
									session_start();
	
									$fno=$_SESSION['fileno'];
									$conn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1");
									if(!$conn)
										{die('Could not connect:'.mysql_error());}
										mysql_select_db('bvmclg');
										$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
										while($r=mysql_fetch_array($res))
										{
											echo $r['st_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
											$cr=$r['course'];
										}
  
								?>
                            </label></td><td width="35%"></td>
                           </tr>
                              <td width="28%"><!--<div align="center" class="style30">Semester</div></td>-->
                            <td width="37%" align="left"><select name="sem" id="sem">
                                  <option value="">--Sem--</option>
								  <option value="I">I Sem</option>
                                  <option value="II">II Sem</option>
                                  <option value="III">III Sem</option>
                                  <option value="IV">IV Sem</option>
								  <option value="V">V Sem</option>
								  <option value="VI">VI Sem</option>
                            </select>                              </td><td></td>
                            
							<tr>
                         	
                              <td width="28%"><div align="left" class="style30"></div></td>
                              <td width="37%">Internal&nbsp;
							  <input type="radio" name="internal" id="internal" value="First" />First&nbsp;<input type="radio" name="internal" id="internal" value="Second" />Second&nbsp;<input type="radio" name="internal" id="internal" value="Third" />Third<br />
							  <!--<select name="internal" id="internal">
                                <option value="">-------Select-------</option>
								<option value=First>First</option>
                                <option value=Second>Second</option>
                                <option value=Third>Third</option>
                              </select>--></td><td></td>
                            </tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                <h3>
                                    <input name="ok" type="submit" class="style30" value=" Result" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <!--<a href="sthome.php"><span class="style14 style13">Exit</span></a></h3>-->
                                 <input name="course" type="hidden" value="<?php echo $cr; ?>">
                                  <p>&nbsp;</p>
								  <?php mysql_close($conn);?>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;    </p>
                              </div></td>
                            </tr>
                          </table>
                        </form>
    </div>
						
			</body></td></tr></table>

</body>
</html>
