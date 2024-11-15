<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <!--<form action="update_sem.php" method="post" >-->
						<form action="update_std_wise_reg.php" method="post" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">UPDATE STUDENT STATUS<br/><br/><br/></td></tr>
						  <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%">
							  <input type="text" name="file_no" id="file_no" /><br />
							  <!--<input type="radio" name="course" id="course" value="MBA" />MBA&nbsp;<input type="radio" name="course" id="course" value="MCA" />MCA&nbsp;<input type="radio" name="course" id="course" value="BBA" />BBA&nbsp;<input type="radio" name="course" id="course" value="BCA" />BCA(JU)&nbsp;<input type="radio" name="course" id="course" value="BCA(M)" />BCA(MCRPV)<br/>-->
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
                              <td width="31%"><div align="center" class="style30">Update Semester </div></td>
                              <td width="100%">
                                <select name="u_sem" id="u_sem">
                                  <option value="">--Select--</option>
								  <option value="1">I Sem</option>
                                  <option value="2">II Sem</option>
                                  <option value="3">III Sem</option>
                                  <option value="4">IV Sem</option>
								  <option value="5">V Sem</option>
								  <option value="6">VI Sem</option>
                                </select>
                              </td><td><input name="submit" type="submit" class="style30" value="Submit" /></td>
                            </tr>
							
</table>
</form>
<?php 
	if($_REQUEST['submit']=='Submit')
	{
		$file_no=$_POST['file_no'];
		//$course=$_POST['course'];
		$sem=$_POST['sem'];
		$u_sem=$_POST['u_sem'];
		$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
		mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());

		//$cn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
		//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
		
		$res=mysql_query("select * from student_reg",$cn);
		while($row=mysql_fetch_array($res))
		{
			if(strcmp($file_no,$row['file_no'])==0 && strcmp($sem,$row['sem'])==0)
		{
			$q="UPDATE student_reg SET sem='".$u_sem."' where sem='".$sem."'";
			mysql_query($q,$cn);
		}
		}
header('location:update_std_wise_reg.php?msg=ok');
}

?>

</div>
</body>
</html>
