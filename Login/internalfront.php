<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />
</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="sendmail.php" method="post" onsubmit="MM_validateForm('name','','R','email','','RisEmail','contact','','RisNum','message','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#00CC99" class="pagefont">
                            <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%"><select name="course" id="course">
                                  <option>-------Select-------</option>
								  <option>MBA</option>
                                  <option>MCA</option>
                                  <option>BBA</option>
                                  <option>BCA</option>
                                </select>                              </td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Semester</div></td>
                              <td width="100%"><select name="semester" id="semester">
                                  <option>-------Select-------</option>
								  <option>I Sem</option>
                                  <option>II Sem</option>
                                  <option>III Sem</option>
                                  <option>IV Sem</option>
								  <option>V Sem</option>
								  <option>VI Sem</option>
                                </select>                              </td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Internal</div></td>
                              <td width="100%"><select name="internal" id="internal">
                                <option>-------Select-------</option>
								<option>First</option>
                                <option>Second</option>
                                <option>Third</option>
                              </select></td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Session</div></td>
                              <td width="100%"><label>
                                <input name="session" type="text" id="session" maxlength="7"  />
                                (YYYY-YY)
                              </label></td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">File No</div></td>
                              <td width="100%"><label>
                                <input name="fileno" type="text" id="fileno" maxlength="10" />
                              </label></td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Name</div></td>
                              <td width="100%"><label>
                                <input name="name" type="text" id="name"  />
                              </label></td>
                            </tr></table>
                            <table table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#00CC99" class="pagefont"><tr>
                              <td><div align="center" class="style30">Subject<br/>Code</div></td><td><div align="center" class="style30">Ist<br/>Internal</div></td><td><div align="center" class="style30">IInd<br/>Internal</div></td><td><div align="center" class="style30">IIIrd<br/>Internal</div></td><td><div align="center" class="style30">Final<br/>Marks<br/>(20)</div></td><td><div align="center" class="style30">Attend.<br/>Marks<br/>(05)</div></td><td><div align="center" class="style30">Prasen.<br/>Marks<br/>(03)</div></td><td><div align="center" class="style30">Assign.<br/>Marks<br/>(02)</div></td><td><div align="center" class="style30">Total<br/>Marks<br/>(10)</div></td></tr>
         <tr><td width="100%" align="center"><label>
         	<input name="code1" type="text" id="code1" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1i1" type="text" id="c1i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1i2" type="text" id="c1i2" size="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1i3" type="text" id="c1i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1final" type="text" id="c1final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1att" type="text" id="c1att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1prs" type="text" id="c1prs" size="2" maxlength="2"/>
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1ass" type="text" id="c1ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c1tot" type="text" id="c1tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>
	<tr><td width="100%" align="center"><label>
         	<input name="code2" type="text" id="code2" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2i1" type="text" id="c2i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2i2" type="text" id="c2i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2i3" type="text" id="c2i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2final" type="text" id="c2final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2att" type="text" id="c2att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2prs" type="text" id="c2prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2ass" type="text" id="c2ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c2tot" type="text" id="c2tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>
	<tr><td width="100%" align="center"><label>
         	<input name="code3" type="text" id="code1" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3i1" type="text" id="c3i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3i2" type="text" id="c3i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3i3" type="text" id="c3i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3final" type="text" id="c3final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3att" type="text" id="c3att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3prs" type="text" id="c3prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3ass" type="text" id="c3ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c3tot" type="text" id="c3tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>
      <tr><td width="100%" align="center"><label>
         	<input name="code4" type="text" id="code4" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4i1" type="text" id="c4i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4i2" type="text" id="c4i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4i3" type="text" id="c4i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4final" type="text" id="c4final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4att" type="text" id="c4att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4prs" type="text" id="c4prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4ass" type="text" id="c4ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c4tot" type="text" id="c4tot" size="2" maxlength="2" />
                         </label></td>
                            </tr> 
	<tr><td width="100%" align="center"><label>
         	<input name="code5" type="text" id="code5" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5i1" type="text" id="c5i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5i2" type="text" id="c5i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5i3" type="text" id="c5i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5final" type="text" id="c5final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5att" type="text" id="c5att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5prs" type="text" id="c5prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5ass" type="text" id="c5ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c5tot" type="text" id="c5tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>						
	<tr><td width="100%" align="center"><label>
         	<input name="code6" type="text" id="code1" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6i1" type="text" id="c6i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6i2" type="text" id="c6i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6i3" type="text" id="c6i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6final" type="text" id="c6final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6att" type="text" id="c6att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6prs" type="text" id="c6prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6ass" type="text" id="c6ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c6tot" type="text" id="c6tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>
	<tr><td width="100%" align="center"><label>
         	<input name="code7" type="text" id="code1" size="3" maxlength="3" />
         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7i1" type="text" id="c7i1" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7i2" type="text" id="c7i2" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7i3" type="text" id="c7i3" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7final" type="text" id="c7final" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7att" type="text" id="c7att" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7prs" type="text" id="c7prs" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7ass" type="text" id="c7ass" size="2" maxlength="2" />
                         </label></td>
						 <td width="100%" align="center"><label>
                        	<input name="c7tot" type="text" id="c7tot" size="2" maxlength="2" />
                         </label></td>
                            </tr>
							
				   <tr>
                              <td colspan="2" align="center"><div align="center" class="style31">
                                  <input name="ok" type="submit" class="style30" value="Submit" />
                              </div></td>
                            </tr>
                          </table>
                        </form>
                        
                        </div>
</body>
</html>
