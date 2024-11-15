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
                              <td colspan="1" width="37%" align="center"><label>
                              
							   <?php 
							   			
									$fno=$_GET['fileno'];
									//include('dbcon.php');
									$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
									
										$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
										while($r=mysql_fetch_array($res))
										{
											//echo $r['st_name'];
											$cr=$r['course'];
											$sem=$r['sem'];
										}
										
									
  //echo $cr;
  //echo $sem;
								?></label></td><td width="35%"></td>
                           </tr>
                          <tr>
                          <td width="28%"><div align="left" class="style30"></div></td>
                              <input type="hidden" name="fileno" value="<?php echo $fno;?>" />
							  <td width="37%">Subject Code<br />
							  <?php if($cr=='MCA' && $sem=='1'){ ?>
							  MCA 101<input type="radio" name="assign" id="assign" value="MCA101" /><br />
							  MCA 102<input type="radio" name="assign" id="assign" value="MCA102" /><br />
							  MCA 103<input type="radio" name="assign" id="assign" value="MCA103" /><br />
							  MCA 104<input type="radio" name="assign" id="assign" value="MCA104" /><br />
							  MCA 105<input type="radio" name="assign" id="assign" value="MCA105" /><br />
							  <?php
							  }
							   else if($cr=='MCA' && $sem=='2')
							   { ?>
							  MCA 201<input type="radio" name="assign" id="assign" value="MCA201" /><br />
							  MCA 202<input type="radio" name="assign" id="assign" value="MCA202" /><br />
							  MCA 203<input type="radio" name="assign" id="assign" value="MCA203" /><br />
							  MCA 204<input type="radio" name="assign" id="assign" value="MCA204" /><br />
							  MCA 205<input type="radio" name="assign" id="assign" value="MCA205" /><br />
							  <?php 
							  }
							  else if($cr=='MCA' && $sem=='3')
							  { ?>
							  MCA 301<input type="radio" name="assign" id="assign" value="MCA301" /><br />
							  MCA 302<input type="radio" name="assign" id="assign" value="MCA302" /><br />
							  MCA 303<input type="radio" name="assign" id="assign" value="MCA303" /><br />
							  MCA 304<input type="radio" name="assign" id="assign" value="MCA304" /><br />
							  MCA 305<input type="radio" name="assign" id="assign" value="MCA305" /><br />
							  <?php 
							  }
							  else if($cr=='MCA' && $sem=='4')
							  { ?>
							  <input type="radio" name="assign" id="assign" value="MCA401" />MCA 401<br />
							  <input type="radio" name="assign" id="assign" value="MCA402" />MCA 402<br />
							  <input type="radio" name="assign" id="assign" value="MCA403" />MCA 403<br />
							  <input type="radio" name="assign" id="assign" value="MCA404" />MCA 404<br />
							  <input type="radio" name="assign" id="assign" value="MCA405ME" />MCA 405 (ME)<br />
							  <input type="radio" name="assign" id="assign" value="MCA405Jav" />MCA 405 (JAVA)<br />
							  <?php
							  }
							   else if($cr=='MCA' && $sem=='5')
							   { ?>
							  <input type="radio" name="assign" id="assign" value="MCA501" />MCA 501<br />
							  <input type="radio" name="assign" id="assign" value="MCA502" />MCA 502<br />
							  <input type="radio" name="assign" id="assign" value="MCA503" />MCA 503<br />
							  <input type="radio" name="assign" id="assign" value="MCA504OB" />MCA 504 (OB)<br />
							  <input type="radio" name="assign" id="assign" value="MCA504NET" />MCA 504 (DotNet)<br />
							  <input type="radio" name="assign" id="assign" value="MCA505" />MCA 505<br />
							  <?php
							  }
							   else if($cr=='MBA' && $sem=='1')
							   { ?>
							  MBA 101<input type="radio" name="assign" id="assign" value="MBA101" /><br />
							  MBA 102<input type="radio" name="assign" id="assign" value="MBA102" /><br />
							  MBA 103<input type="radio" name="assign" id="assign" value="MBA103" /><br />
							  MBA 104<input type="radio" name="assign" id="assign" value="MBA104" /><br />
							  MBA 105<input type="radio" name="assign" id="assign" value="MBA105" /><br />
							  MBA 106<input type="radio" name="assign" id="assign" value="MBA106" /><br />
							  MBA 107<input type="radio" name="assign" id="assign" value="MBA107" /><br />
							  MBA 108<input type="radio" name="assign" id="assign" value="MBA108" /><br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='2'){ ?>
							  MBA 201<input type="radio" name="assign" id="assign" value="MBA201" /><br />
							  MBA 202<input type="radio" name="assign" id="assign" value="MBA202" /><br />
							  MBA 203<input type="radio" name="assign" id="assign" value="MBA203" /><br />
							  MBA 204<input type="radio" name="assign" id="assign" value="MBA204" /><br />
							  MBA 205<input type="radio" name="assign" id="assign" value="MBA205" /><br />
							  MBA 206<input type="radio" name="assign" id="assign" value="MBA206" /><br />
							  MBA 207<input type="radio" name="assign" id="assign" value="MBA207" /><br />
							  <!--MBA 208<input type="radio" name="assign" id="assign" value="MBA208" /><br />-->
							  JU 001&nbsp;&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA2 JU001" /><br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='3'){ ?>
							  <input type="radio" name="assign" id="assign" value="MBA301" />MBA 301<br />
							  <input type="radio" name="assign" id="assign" value="MBA302" />MBA 302<br />
							  <input type="radio" name="assign" id="assign" value="MBA303" />MBA 303<br />
							  <input type="radio" name="assign" id="assign" value="MBA3FM01" />FM - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA3FM02" />FM - 02<br />
							  <input type="radio" name="assign" id="assign" value="MBA3HR01" />HR - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA3HR02" />HR - 02<br />
							  <input type="radio" name="assign" id="assign" value="MBA3IB01" />IB - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA3IB02" />IB - 02<br />
							  <input type="radio" name="assign" id="assign" value="MBA3MK01" />MK - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA3MK02" />MK - 02<br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='4'){ ?>
							  <input type="radio" name="assign" id="assign" value="MBA401" />MBA 401<br />
							  <input type="radio" name="assign" id="assign" value="MBA402" />MBA 402<br />
							  <input type="radio" name="assign" id="assign" value="MBA4MK03" />MK - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4MK04" />MK - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4FM03" />FM - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4FM04" />FM - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4HR03" />HRM - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4HR04" />HRM - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4IB03" />IB - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4IB04" />IB - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4OP01" />OP - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA4OP02" />OP - 02<br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='1'){ ?>
							  BCA 101<input type="radio" name="assign" id="assign" value="BCA101" /><br />
							  BCA 102<input type="radio" name="assign" id="assign" value="BCA102" /><br />
							  BCA 103<input type="radio" name="assign" id="assign" value="BCA103" /><br />
							  BCA 104<input type="radio" name="assign" id="assign" value="BCA104" /><br />
							  BCA 105<input type="radio" name="assign" id="assign" value="BCA105" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='2'){ ?>
							  BCA 201<input type="radio" name="assign" id="assign" value="BCA201" /><br />
							  BCA 202<input type="radio" name="assign" id="assign" value="BCA202" /><br />
							  BCA 203<input type="radio" name="assign" id="assign" value="BCA203" /><br />
							  BCA 204<input type="radio" name="assign" id="assign" value="BCA204" /><br />
							  BCA 205<input type="radio" name="assign" id="assign" value="BCA205" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='3'){ ?>
							  BCA 301<input type="radio" name="assign" id="assign" value="BCA301" /><br />
							  BCA 302<input type="radio" name="assign" id="assign" value="BCA302" /><br />
							  BCA 303<input type="radio" name="assign" id="assign" value="BCA303" /><br />
							  BCA 304<input type="radio" name="assign" id="assign" value="BCA304" /><br />
							  BCA 305<input type="radio" name="assign" id="assign" value="BCA305" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='4'){ ?>
							  BCA 401<input type="radio" name="assign" id="assign" value="BCA401" /><br />
							  BCA 402<input type="radio" name="assign" id="assign" value="BCA402" /><br />
							  BCA 403<input type="radio" name="assign" id="assign" value="BCA403" /><br />
							  BCA 404<input type="radio" name="assign" id="assign" value="BCA404" /><br />
							  BCA 405<input type="radio" name="assign" id="assign" value="BCA405" /><br />
							  <?php
							  }
							   else if($cr=='BCA' && $sem=='5'){ ?>
							  BCA 501<input type="radio" name="assign" id="assign" value="BCA501" /><br />
							  BCA 502<input type="radio" name="assign" id="assign" value="BCA502" /><br />
							  BCA 503<input type="radio" name="assign" id="assign" value="BCA503" /><br />
							  BCA 504<input type="radio" name="assign" id="assign" value="BCA504" /><br />
							  BCA 505<input type="radio" name="assign" id="assign" value="BCA505" /><br />
							  <?php
							  }
							   else if($cr=='BCA' && $sem=='6'){ ?>
							  BCA 601<input type="radio" name="assign" id="assign" value="BCA601" /><br />
							  BCA 602<input type="radio" name="assign" id="assign" value="BCA602" /><br />
							  BCA 603<input type="radio" name="assign" id="assign" value="BCA603" /><br />
							  BCA 604<input type="radio" name="assign" id="assign" value="BCA604" /><br />
							  BCA 605<input type="radio" name="assign" id="assign" value="BCA605" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='1'){ ?>
							  BBA 101<input type="radio" name="assign" id="assign" value="BBA101" /><br />
							  BBA 102<input type="radio" name="assign" id="assign" value="BBA102" /><br />
							  BBA 103<input type="radio" name="assign" id="assign" value="BBA103" /><br />
							  BBA 104<input type="radio" name="assign" id="assign" value="BBA104" /><br />
							  BBA 105<input type="radio" name="assign" id="assign" value="BBA105" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='2'){ ?>
							  BBA 201<input type="radio" name="assign" id="assign" value="BBA201" /><br />
							  BBA 202<input type="radio" name="assign" id="assign" value="BBA202" /><br />
							  BBA 203<input type="radio" name="assign" id="assign" value="BBA203" /><br />
							  BBA 204<input type="radio" name="assign" id="assign" value="BBA204" /><br />
							  BBA 205<input type="radio" name="assign" id="assign" value="BBA205" /><br />
							  <?php 
							  }
							  else if($cr=='BBA' && $sem=='3'){ ?>
							  BBA 301<input type="radio" name="assign" id="assign" value="BBA301" /><br />
							  BBA 302<input type="radio" name="assign" id="assign" value="BBA302" /><br />
							  BBA 303<input type="radio" name="assign" id="assign" value="BBA303" /><br />
							  BBA 304<input type="radio" name="assign" id="assign" value="BBA304" /><br />
							  BBA 305<input type="radio" name="assign" id="assign" value="BBA305" /><br />
							  BBA 306<input type="radio" name="assign" id="assign" value="BBA306" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='4'){ ?>
							  BBA 401<input type="radio" name="assign" id="assign" value="BBA401" /><br />
							  BBA 402<input type="radio" name="assign" id="assign" value="BBA402" /><br />
							  BBA 403<input type="radio" name="assign" id="assign" value="BBA403" /><br />
							  BBA 404<input type="radio" name="assign" id="assign" value="BBA404" /><br />
							  BBA 405<input type="radio" name="assign" id="assign" value="BBA405" /><br />
							  BBA 406<input type="radio" name="assign" id="assign" value="BBA406" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='5'){ ?>
							  <input type="radio" name="assign" id="assign" value="BBA501" />BBA 501<br />
							  <input type="radio" name="assign" id="assign" value="BBA502" />BBA 502<br />
							  <input type="radio" name="assign" id="assign" value="BBA503" />BBA 503<br />
							  <input type="radio" name="assign" id="assign" value="BBA504FM" />BBA 504 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA504HR" />BBA 504 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA504MK" />BBA 504 (MK)<br />
							  <input type="radio" name="assign" id="assign" value="BBA505FM" />BBA 505 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA505HR" />BBA 505 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA505MK" />BBA 505 (MK)<br />
							  <input type="radio" name="assign" id="assign" value="BBA506FM" />BBA 506 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA506HR" />BBA 506 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA506MK" />BBA 506 (MK)<br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='6'){ ?>
							  <input type="radio" name="assign" id="assign" value="BBA601" />BBA 601<br />
							  <input type="radio" name="assign" id="assign" value="BBA602" />BBA 602<br />
							  <input type="radio" name="assign" id="assign" value="BBA603" />BBA 603<br />
							  <input type="radio" name="assign" id="assign" value="BBA604FM" />BBA 604 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA604HR" />BBA 604 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA604MK" />BBA 604 (MK)<br />
							  <input type="radio" name="assign" id="assign" value="BBA605FM" />BBA 605 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA605HR" />BBA 605 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA605MK" />BBA 605 (MK)<br />
							  <input type="radio" name="assign" id="assign" value="BBA606FM" />BBA 606 (FM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA606HR" />BBA 606 (HR)<br />
							  <input type="radio" name="assign" id="assign" value="BBA606MK" />BBA 606 (MK)<br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='1'){ ?>
							  1BCA1<input type="radio" name="assign" id="assign" value="1BCA1" /><br />
							  1BCA2<input type="radio" name="assign" id="assign" value="1BCA2" /><br />
							  1BCA3<input type="radio" name="assign" id="assign" value="1BCA3" /><br />
							  1BCA4<input type="radio" name="assign" id="assign" value="1BCA4" /><br />
							  1BCA5<input type="radio" name="assign" id="assign" value="1BCA5" /><br />
							  <?php 
							  }
							  else if($cr=='BCA(M)' && $sem=='2'){ ?>
							  2BCA1<input type="radio" name="assign" id="assign" value="2BCA1" /><br />
							  2BCA2<input type="radio" name="assign" id="assign" value="2BCA2" /><br />
							  2BCA3<input type="radio" name="assign" id="assign" value="2BCA3" /><br />
							  2BCA4<input type="radio" name="assign" id="assign" value="2BCA4" /><br />
							  2BCA5<input type="radio" name="assign" id="assign" value="2BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='3'){ ?>
							  3BCA1<input type="radio" name="assign" id="assign" value="3BCA1" /><br />
							  3BCA2<input type="radio" name="assign" id="assign" value="3BCA2" /><br />
							  3BCA3<input type="radio" name="assign" id="assign" value="3BCA3" /><br />
							  3BCA4<input type="radio" name="assign" id="assign" value="3BCA4" /><br />
							  3BCA5<input type="radio" name="assign" id="assign" value="3BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='4'){ ?>
							  4BCA1<input type="radio" name="assign" id="assign" value="4BCA1" /><br />
							  4BCA2<input type="radio" name="assign" id="assign" value="4BCA2" /><br />
							  4BCA3<input type="radio" name="assign" id="assign" value="4BCA3" /><br />
							  4BCA4<input type="radio" name="assign" id="assign" value="4BCA4" /><br />
							  4BCA5<input type="radio" name="assign" id="assign" value="4BCA5" /><br />
							  <?php 
							  }
							  else if($cr=='BCA(M)' && $sem=='5'){ ?>
							  5BCA1<input type="radio" name="assign" id="assign" value="5BCA1" /><br />
							  5BCA2<input type="radio" name="assign" id="assign" value="5BCA2" /><br />
							  5BCA3<input type="radio" name="assign" id="assign" value="5BCA3" /><br />
							  5BCA4<input type="radio" name="assign" id="assign" value="5BCA4" /><br />
							  5BCA5<input type="radio" name="assign" id="assign" value="5BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='6'){ ?>
							  6BCA1<input type="radio" name="assign" id="assign" value="6BCA1" /><br />
							  6BCA2<input type="radio" name="assign" id="assign" value="6BCA2" /><br />
							  6BCA3<input type="radio" name="assign" id="assign" value="6BCA3" /><br />
							  6BCA4<input type="radio" name="assign" id="assign" value="6BCA4" /><br />
							  6BCA5<input type="radio" name="assign" id="assign" value="6BCA5" /><br />
							  <?php }
							  else
							  {}
							  ?>
							  
							 </td>
                            </tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                <h3>
                                    <input name="ok" type="submit" class="style30" value=" Assignment" />
                                   
                                 <input name="course" type="hidden" value="<?php echo $cr; ?>">
                                  <p>&nbsp;</p>
								 
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
                          </table><?php //ob_flush(); ?>			
                        </form>
    </div>
						
			</td></tr></table>
			
</body>
</html>
