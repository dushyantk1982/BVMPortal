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
-->
</style>
<link href="about us/css/first.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style13 {color: #990000}
.style14 {
	font-family: "Times New Roman", Times, serif;
	color: #990000;
}
.style15 {font-size: 18px}
.style16 {color: #660000}
-->
</style>

</head>

<body>
<table width="700"><tr>
<td width="90%" valign="middle" ><div align="center">
  

</div> 
<div class="style2" id="Layer4" style="border:border-color:#003333;">
	<!--<form action="findresult.php?id=findresult" method="post">-->
	<form action="internalresult.php" method="post">
		<table width="100%" align="center" bgcolor="#FFFFFF" class="pagefont">
			<tr>
				<td align="center" colspan="3">
					<h3 class="style15 style16"><u>INTERNAL RESULTS</u></h3>
                </td>
            </tr>
			<tr>
				<td align="center" colspan="3"><h3 class="style13">
				<!-- Enter the session in value in inout type -->
				<input type="hidden" name="ses" value="2014-15" /><!--2014-2015--></h3>
				</td>
			</tr>
			<tr>
            	<td width="31%">
					<div align="center" class="style30">
						<table>
							<tr>
								<td>Course</td>
								<td>
									<select name="course">
										<option value="">--Select--</option>
										<option value="MBA">MBA</option>
										<option value="MCA">MCA</option>
										<option value="BBA">BBA</option>
										<option value="BCA">BCA</option>
										<option value="BCA(M)">BCA(M)</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Sem</td>
								<td>
									<select name="sem">
										<option value="">--Select--</option>
										<option value="1">I</option>
										<option value="2">II</option>
										<option value="3">III</option>
										<option value="4">IV</option>
										<option value="5">V</option>
										<option value="6">VI</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Paper Code</td>
								<td>
									<?php
										echo "<select name='code'>
											<option value=''>--Select--</option>
											<option value='MBA101'>MBA 101</option>
											<option value='MBA102'>MBA 102</option>
											<option value='MBA103'>MBA 103</option>
											<option value='MBA104'>MBA 104</option>
											<option value='MBA105'>MBA 105</option>
											<option value='MBA106'>MBA 106</option>
											<option value='MBA107'>MBA 107</option>
											<option value='MBA108'>MBA 108</option>
											<option value='MBA201'>MBA 201</option>
											<option value='MBA202'>MBA 202</option>
											<option value='MBA203'>MBA 203</option>
											<option value='MBA204'>MBA 204</option>
											<option value='MBA205'>MBA 205</option>
											<option value='MBA206'>MBA 206</option>
											<option value='MBA207'>MBA 207</option>
											<option value='MBA2 JU001'>MBA 2(JU001)</option>
											<option value='MBA301'>MBA 301</option>
											<option value='MBA302'>MBA 302</option>
											<option value='MBA303'>MBA 303</option>
											<option value='MBA3 FM01'>MBA3 FM01</option>
											<option value='MBA3 FM02'>MBA3 FM02</option>
											<option value='MBA3 HR01'>MBA3 HR01</option>
											<option value='MBA3 HR02'>MBA3 HR02</option>
											<option value='MBA3 IB01'>MBA3 IB01</option>
											<option value='MBA3 IB02'>MBA3 IB02</option>
											<option value='MBA3 MK01'>MBA3 MK01</option>
											<option value='MBA3 MK02'>MBA3 MK02</option>
											<option value='MBA401'>MBA 401</option>
											<option value='MBA402'>MBA 402</option>
											<option value='MBA4 FM01'>MBA4 FM01</option>
											<option value='MBA4 FM02'>MBA4 FM02</option>
											<option value='MBA4 HR01'>MBA4 HR01</option>
											<option value='MBA4 HR02'>MBA4 HR02</option>
											<option value='MBA4 IB01'>MBA4 IB01</option>
											<option value='MBA4 IB02'>MBA4 IB02</option>
											<option value='MBA4 MK01'>MBA4 MK01</option>
											<option value='MBA4 MK02'>MBA4 MK02</option>
											<option value='MBA4 OP01'>MBA4 OP01</option>
											<option value='MBA4 OP02'>MBA4 OP02</option>
											<option value='MCA101'>MCA 101</option>
											<option value='MCA102'>MCA 102</option>
											<option value='MCA103'>MCA 103</option>
											<option value='MCA104'>MCA 104</option>
											<option value='MCA105'>MCA 105</option>
											<option value='MCA201'>MCA 201</option>
											<option value='MCA202'>MCA 202</option>
											<option value='MCA203'>MCA 203</option>
											<option value='MCA204'>MCA 204</option>
											<option value='MCA205'>MCA 205</option>
											<option value='MCA301'>MCA 301</option>
											<option value='MCA302'>MCA 302</option>
											<option value='MCA303'>MCA 303</option>
											<option value='MCA304'>MCA 304</option>
											<option value='MCA305'>MCA 305</option>
											<option value='MCA401'>MCA 401</option>
											<option value='MCA402'>MCA 402</option>
											<option value='MCA403'>MCA 403</option>
											<option value='MCA404'>MCA 404</option>
											<option value='MCA405 ME'>MCA 405(ME)</option>
											<option value='MCA405 Jav'>MCA 405(Java)</option>
											<option value='MCA501'>MCA 501</option>
											<option value='MCA502'>MCA 502</option>
											<option value='MCA503'>MCA 503</option>
											<option value='MCA504 OB'>MCA 504(OB)</option>
											<option value='MCA504 NET'>MCA 504(DotNet)</option>
											<option value='MCA505'>MCA 505</option>
											<option value='BCA101'>BCA 101</option>
											<option value='BCA102'>BCA 102</option>
											<option value='BCA103'>BCA 103</option>
											<option value='BCA104'>BCA 104</option>
											<option value='BCA105'>BCA 105</option>
											<option value='BCA201'>BCA 201</option>
											<option value='BCA202'>BCA 202</option>
											<option value='BCA203'>BCA 203</option>
											<option value='BCA204'>BCA 204</option>
											<option value='BCA205'>BCA 205</option>
											<option value='BCA301'>BCA 301</option>
											<option value='BCA302'>BCA 302</option>
											<option value='BCA303'>BCA 303</option>
											<option value='BCA304'>BCA 304</option>
											<option value='BCA305'>BCA 305</option>
											<option value='BCA401'>BCA 401</option>
											<option value='BCA402'>BCA 402</option>
											<option value='BCA403'>BCA 403</option>
											<option value='BCA404'>BCA 404</option>
											<option value='BCA405'>BCA 405</option>
											<option value='BCA501'>BCA 501</option>
											<option value='BCA502'>BCA 502</option>
											<option value='BCA503'>BCA 503</option>
											<option value='BCA504'>BCA 504</option>
											<option value='BCA505'>BCA 505</option>
											<option value='BCA601'>BCA 601</option>
											<option value='BCA602'>BCA 602</option>
											<option value='BCA603'>BCA 603</option>
											<option value='BCA604'>BCA 604</option>
											<option value='BBA605'>BCA 605</option>
											<option value='BBA101'>BBA 101</option>
											<option value='BBA102'>BBA 102</option>
											<option value='BBA103'>BBA 103</option>
											<option value='BBA104'>BBA 104</option>
											<option value='BBA105'>BBA 105</option>
											<option value='BBA201'>BBA 201</option>
										<option value='BBA202'>BBA 202</option>
										<option value='BBA203'>BBA 203</option>
										<option value='BBA204'>BBA 204</option>
										<option value='BBA205'>BBA 205</option>
										<option value='BBA301'>BBA 301</option>
										<option value='BBA302'>BBA 302</option>
										<option value='BBA303'>BBA 303</option>
										<option value='BBA304'>BBA 304</option>
										<option value='BBA305'>BBA 305</option>
										<option value='BBA306'>BBA 306</option>
										<option value='BBA401'>BBA 401</option>
										<option value='BBA402'>BBA 402</option>
										<option value='BBA403'>BBA 403</option>
										<option value='BBA404'>BBA 404</option>
										<option value='BBA405'>BBA 405</option>
										<option value='BBA406'>BBA 406</option>
										<option value='BBA501'>BBA 501</option>
										<option value='BBA502'>BBA 502</option>
										<option value='BBA503'>BBA 503</option>
										<option value='BBA504 FM'>BBA504 FM</option>
										<option value='BBA504 HR'>BBA504 HR</option>
										<option value='BBA504 MK'>BBA504 MK</option>
										<option value='BBA505 FM'>BBA505 FM</option>
										<option value='BBA505 HR'>BBA505 HR</option>
										<option value='BBA505 MK'>BBA505 MK</option>
										<option value='BBA506 FM'>BBA506 FM</option>
										<option value='BBA506 HR'>BBA506 HR</option>
										<option value='BBA506 MK'>BBA506 MK</option>
										<option value='BBA601'>BBA 601</option>
										<option value='BBA602'>BBA 602</option>
										<option value='BBA603'>BBA 603</option>
										<option value='BBA604 FM'>BBA604 FM</option>
										<option value='BBA604 HR'>BBA604 HR</option>
										<option value='BBA604 MK'>BBA604 MK</option>
										<option value='BBA605 FM'>BBA605 FM</option>
										<option value='BBA605 HR'>BBA605 HR</option>
										<option value='BBA605 MK'>BBA605 MK</option>
										<option value='BBA606 FM'>BBA606 FM</option>
										<option value='BBA606 HR'>BBA606 HR</option>
										<option value='BBA606 MK'>BBA606 MK</option>
										<option value='1BCA1'>1BCA1</option>
										<option value='1BCA2'>1BCA2</option>
										<option value='1BCA3'>1BCA3</option>
										<option value='1BCA4'>1BCA4</option>
										<option value='1BCA5'>1BCA5</option>
										<option value='2BCA1'>2BCA1</option>
										<option value='2BCA2'>2BCA2</option>
										<option value='2BCA3'>2BCA3</option>
										<option value='2BCA4'>2BCA4</option>
										<option value='2BCA5'>2BCA5</option>
										<option value='3BCA1'>3BCA1</option>
										<option value='3BCA2'>3BCA2</option>
										<option value='3BCA3'>3BCA3</option>
										<option value='3BCA4'>3BCA4</option>
										<option value='3BCA5'>3BCA5</option>
										<option value='4BCA1'>4BCA1</option>
										<option value='4BCA2'>4BCA2</option>
										<option value='4BCA3'>4BCA3</option>
										<option value='4BCA4'>4BCA4</option>
										<option value='4BCA5'>4BCA5</option>
										<option value='5BCA1'>5BCA1</option>
										<option value='5BCA2'>5BCA2</option>
										<option value='5BCA3'>5BCA3</option>
										<option value='5BCA4'>5BCA4</option>
										<option value='5BCA5'>5BCA5</option>
										<option value='6BCA1'>6BCA1</option>
										<option value='6BCA2'>6BCA2</option>
										<option value='6BCA3'>6BCA3</option>
										</select>";
									?>
								</td>
							</tr>
						
						</table>
					</div>
				</td>
                <!--<td colspan="1" width="53%" align="center"><label>
                                <?php 
					//				$fno=$_GET['fileno'];
						//			include('dbcon.php');
									//$conn=mysql_connect("localhost","root","");
							//		if(!$conn)
								//		{die('Could not connect:'.mysql_error());}
										//mysql_select_db('bvmclg');
									//	$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
										//while($r=mysql_fetch_array($res))
										//{
											//echo $r['st_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
										//	$cr=$r['course'];
											//$sem=$r['sem'];
											//$name=$r['st_name'];
									//	}
  
								?>
                            </label></td><td width="16%"></td>
                           </tr>
                              <td width="31%"><!--<div align="center" class="style30">Semester</div></td>
                            <td width="53%" align="left"><select name="sem" id="sem">
                                  <option value="">--Sem--</option>
								  <option value="I">I Sem</option>
                                  <option value="II">II Sem</option>
                                  <option value="III">III Sem</option>
                                  <option value="IV">IV Sem</option>
								  <option value="V">V Sem</option>
								  <option value="VI">VI Sem</option>
                            </select>                              </td>
                            <td></td>-->
                            
							<tr>
                         	
                              <td width="31%"><div align="left" class="style30"></div></td>
                              <td width="53%">Internal&nbsp;
							  <input type="radio" name="internal" id="internal" value="First" />First&nbsp;<input type="radio" name="internal" id="internal" value="Second" />Second&nbsp;<input type="radio" name="internal" id="internal" value="Third" />Third<br />
							  </td><td></td>
                            </tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                <h3>
                                    <input name="submit" type="submit" class="style30" value=" Submit" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <!-- <a href="sthome.php?fileno=<?php echo $fno; ?>"><span class="style14 style13">Exit</span></a></h3>-->
								<!-- <input type="hidden" name="fileno" value="<?php //echo $fno; ?>" />
                                 <input name="course" type="hidden" value="<?php //echo $cr; ?>" />
								 <input type="hidden" name="sem" value="<?php //echo $sem;?>" />
								 <input type="hidden" name="name" value="<?php// echo $name; ?>" />-->
                                  <p>&nbsp;</p>
								  <?php //mysql_close($conn);?>
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
			<?php //ob_flush(); ?>			
			</td></tr></table>
			
<?php
/*if($_REQUEST['submit']=='Result')
{
	$course=$_POST['course'];
	$sem=$_POST['sem'];
	$internal=$_POST['internal'];
	$code=$_POST['code'];
	
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	echo "<table><tr><td>File No</td><td>Marks</td><td>Edit</td></tr>";
	$col=mysql_query("select * from internal_record where sem='". $sem ."' and course='". $course ."' and internal='". $internal ."' and paper_code='".$code."'",$conn);
						 
						 while($row=mysql_fetch_array($col,MYSQL_ASSOC))
						 {
						 	echo "<tr><td align=center>".$row['file_no']."</td><td align=center>".$row['marks']."</td></tr>";
						 }
						 echo "</table>";
						 }*/
						 ?>
						
</body>
</html>
