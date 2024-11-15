<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="get_std_list.php" method="post" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Create Assignment<br/><br/><br/></td></tr>
						  
                         <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%">
							  <input type="radio" name="course" id="course" value="MBA" />MBA&nbsp;<input type="radio" name="course" id="course" value="MCA" />MCA&nbsp;<input type="radio" name="course" id="course" value="BBA" />BBA&nbsp;<input type="radio" name="course" id="course" value="BCA" />BCA(JU)&nbsp;<input type="radio" name="course" id="course" value="BCA(M)" />BCA(MCRPV)<br/>
							  </td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Semester</div></td>
                              <td width="100%">
							  <select name="sem" id="sem">
                                  <option value="">--Select--</option>
								  <option value="1">I Sem</option>
                                  <option value="2">II Sem</option>
                                  <option value="3">III Sem</option>
                                  <option value="4">IV Sem</option>
								  <option value="5">V Sem</option>
								  <option value="6">VI Sem</option>
                                </select><br />                              </td>
                            </tr>
							<tr>
							<td><div align="center" class="style30">Paper Code</div></td>
							<td>
								<?php
									$fac_id=$_REQUEST['fac_id'];
									try
									{
										//include('dblocal.php');
										$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
										mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
										$rs=mysql_query("select * from faculty_reg where fac_id='".$fac_id."'",$conn);
										while($r=mysql_fetch_array($rs))
										{$faculty_name=$r['faculty_name'];}
										echo "<select name='code'><option value=''>--Select--</option>";
										$res=mysql_query("select * from faculty_assign where faculty_name='".$faculty_name."'",$conn);
										while($row=mysql_fetch_array($res))
										{
											echo "<option value='".$row['1']."'>".$row['1']." - ".$row['2']."</option>";
										}
										echo "</select>";
									}
									catch(Exception $e)
									{
										echo $e."";
									}	
									
									
								?>
							</td>
							</tr>
							<tr><td colspan="2"><input type="hidden" name="fac_id" value="<?php echo $_REQUEST['fac_id']; ?>" /></td></tr>
							<tr>
                              <!--<td width="31%"><div align="center" class="style30">Number of Students</div></td>
                              <td width="100%">
                                <input name="count" type="text" id="count" />
                              </td>--><td colspan="4" align="right"><input name="ok" type="submit" class="style30" value="Submit" /></td>
                            </tr>
							
</table>
</form>
</div>
</body>
</html>
