<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
             <form action="inserteditassign.php" method="post" >
                          <table width="100%" align="center" bordercolor="#FFFFFF" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Assignment Insertion<br/><br/><br/></td></tr>
						<tr><table width="70%" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="pagefont">
							<tr>
								<td width="30%" align="left"><div align="center" class="style30">&nbsp;</div></td>
								<td width="40%" colspan="4" align="left">
								<?php
										$file_no=$_REQUEST['file_no'];
										$code=$_REQUEST['assign'];
										//include('dblocal.php');
										$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
										mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
										$res=mysql_query("select * from faculty_assign where paper_code='".$code."'",$conn);
										while($row=mysql_fetch_array($res))
										{
											echo "File No:".$file_no."<br/>Subject:".$row[1]."-".$row[2];
										}
																		
								?>

								
								</td>
							</tr>
							<tr><td>
                           
                            <br /></td></tr>
							 <?php
                                	$rs=mysql_query("select * from assignment where file_no='".$file_no."' and paper_code='".$code."'",$conn);
										$i=1;
										while($r=mysql_fetch_array($rs))
										{
											
											echo "<tr>
								<td width='30%' align='center'><div align='center' class='style30'>Q.".$i."</div></td>
								<td width='40%' colspan='4' align='left'><input type='text' name='que[]' value=".$r[3]." size='50'/></td>
								<td width='40%' colspan='4' align='left'><input type='hidden' name='s_no[]' value=".$r[0]." size='50'/></td>
							</tr>";
							$i++;
										}
										
										
								?>	
                          
								<td width="30%" align="center"><input type="hidden" name="file_no" value="<?php echo $file_no; ?>" /></td>
                          		<td width="30%" align="center"><input type="hidden" name="code" value="<?php echo $code; ?>" /></td>
								<td width="40%" align="left" colspan="4"><input type="submit" value="Edit" size="30" /></td>
								
							</tr>
							
							</table>
							</tr>
							
							
                          </table>
                        </form>
						<?php if($_REQUEST['msg']=='ok')
						{
							echo "Record Edited Successfully";
						}
						else
						{ echo "Sorry! Try Again";}?>
                        <p>&nbsp;</p>
      <p>&nbsp;</p>
     
                        </div>
</body>
</html>
