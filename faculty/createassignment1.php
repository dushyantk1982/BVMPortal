<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	$fac_id=$_POST['fac_id'];
	$course=$_POST['course'];
	$sem=$_POST['sem'];
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
             <form action="insertassign.php" method="post" >
                          <table width="100%" align="center" bordercolor="#FFFFFF" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Assignment Insertion<br/><br/></td></tr>
						<tr><table width="60%" align="center" bordercolor="#FFFFFF" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							<tr>
								<td width="31%" align="left"><div align="center" class="style30">Course</div></td>
								<td width="31%" colspan="4" align="center"><?php echo $course."&nbsp;&nbsp;".$sem; ?></td>
							</tr>
							<tr>
								<td width="31%" align="left"><div align="center" class="style30">Paper Code</div></td>
								<td width="31%" colspan="4" align="center">
								<?php
									try
									{
										include('dblocal.php');
										//$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
										//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
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
							</table></tr>
							<tr><td>
							<!--<table width="90%" align="center" bordercolor="#FFFFFF"  bgcolor="#FFFFFF" class="pagefont">			<tr>-->
							<?php
										/*include('dblocal.php');
										//$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
										//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
										$result=mysql_query("select * from student_reg where course='".$course."' and sem='".$sem."' and status='active'",$conn);
										echo "<tr>
							<td width='31%' align='center'><div align='center' class='style30'>File No.</div></td>
							<td width='31%' align='center'><div align='center' class='style30'>Q.1</div></td>
							<td width='31%' align='center'><div align='center' class='style30'>Q.2</div></td>
							<td width='31%' align='center'><div align='center' class='style30'>Q.3</div></td>
							<td width='31%' align='center'><div align='center' class='style30'>Q.4</div></td>
							</tr>";
										while($fn=mysql_fetch_array($result))
										{
							$i=1;		*/
										?>
							
							<!--<tr>
								<td width="31%" align="center"><input type="text" name="fn[]" value="<?php //echo $fn['file_no']; ?>" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>-->
													
							<table width="60%" align="center" bordercolor="#FFFFFF" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">File No.</div></td>
								<td width="31%" align="center"><input type="text" name="fn[]" value="<?php //echo $fn['file_no']; ?>" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" value="<?php //echo $fn['file_no']; ?>" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" value="<?php //echo $fn['file_no']; ?>" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" value="<?php //echo $fn['file_no']; ?>" maxlength="8" size="8" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.1</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.2</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.3</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.4</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.5</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							</table>
					
							<?php
							
							//}
							?>
							</tr>
							<tr>
								<td width="60%" align="center"><input type="submit" value="Submit" /></td>
								
							</tr>
							
							</table>
							</tr>
							
							
                          </table>
                        </form>
						<?php if($_REQUEST['msg']=='ok')
						{
							echo "Record Inserted Successfully";
						}
						else
						{ echo "Sorry! Record is not inserted";}?>
                        <p>&nbsp;</p>
      <p>&nbsp;</p>
     
                        </div>
</body>
</html>
