<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	//session_start();
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
             <form action="insertassign.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Assignment Insertion<br/><br/><br/></td></tr>
						<tr><table width="60%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Paper Code</div></td>
								<td width="31%" colspan="4" align="center">
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
										<option value='MBA4 FM01'>MBA4 FM01 Indian Financial System</option>
										<option value='MBA4 FM02'>MBA4 FM02 Security Analysis and Portfolio Management</option>
										<option value='MBA4 FM03'>MBA4 FM03 Project Management</option>
										<option value='MBA4 FM04'>MBA4 FM04 Strategic Tax Planning & Tax Management</option>
										<option value='MBA4 HR01'>MBA4 HR01 Human Resource & Organizational Development</option>
										<option value='MBA4 HR02'>MBA4 HR02 Legal Framework Governing Human Relation (Part-I)</option>
										<option value='MBA4 HR03'>MBA4 HR03 Compensation Planning</option>
										<option value='MBA4 HR04'>MBA4 HR04 Legal Framework Governing Human Relation (Part-II)</option>
										<option value='MBA4 IB01'>MBA4 IB01 International Marketing</option>
										<option value='MBA4 IB02'>MBA4 IB02 International Business Environment & Foreign Exchange Economics</option>
										<option value='MBA4 IB03'>MBA4 IB03 Export Management and Documentation</option>
										<option value='MBA4 IB04'>MBA4 IB04 International Logistics Management</option>
										<option value='MBA4 MK01'>MBA4 MK01 Consumer Behaviour</option>
										<option value='MBA4 MK02'>MBA4 MK02 Sales and Distribution Management</option>
										<option value='MBA4 MK03'>MBA4 MK03 Retailing</option>
										<option value='MBA4 MK04'>MBA4 MK04 Service Marketing</option>
										<option value='MBA4 OP01'>MBA4 OP01 Rural Management</option>
										<option value='MBA4 OP02'>MBA4 OP02 Insurance Risk Management</option>
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
										<option value='BCA605'>BCA 605</option>
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
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">File No.</div></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
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
