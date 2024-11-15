<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
                        <table width="60%" align="center" bordercolor="#000000" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
                         <tr><td colspan="2" align="center" width="100%"><font color="#990000" size="+3">Internal Result</font></td></tr></table>
						 <?php 
						 $course=$_POST['course'];
						 $sem=$_POST['sem'];
						 $int=$_POST['internal'];
						 $fno=$_POST['fileno'];
						 
						 
						 $conn=mysql_connect('localhost','root','');
						 if(!$conn)
						 {die('Could not connect:'.mysql_error());}
						 //$sql='select * from internal_record where file_no=$fno';
						 mysql_select_db('bvmclg');
						 $col=mysql_query("select * from internal_record where file_no='". $fno ."' and sem='". $sem ."' and course='". $course ."' and internal='". $int ."'",$conn);
						 if(!$col)
						 {die('Could not connect'.mysql_error());}
						 while($row=mysql_fetch_array($col,MYSQL_ASSOC))
						 {
						 //echo "Marks: {". $row['marks'] . "}<br/>";
						 //echo "Course: {". $row['course']."}";
						 $marks=$row['marks'];
						 //echo $marks;
						 }
						 
						 
						 ?>
						 
						 
						 
						 <table width="60%" align="center" bordercolor="#000000" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
						<tr><td colspan="2" align="center"><?php echo $int;?>&nbsp;Internal</td></tr>
						 <tr><td align="center" width="30%">Fil No</td><td align="left" width="70%"><?php echo $fno;?></td></tr>
 						 <tr><td align="center" width="30%"><?php echo $course;?></td><td align="left" width="70%"><?php echo $sem;?>&nbsp;Sem</td></tr>
						 
						 </table>
						 <table width="60%" align="center" bordercolor="#000000" border="1" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
						 <tr><td align="center">Subject<br/>Code</td>
						 <?php
		if((strcmp($sem,'I'))==0)
		{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>101</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>102</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>103</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>104</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>105</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>106</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>107</td>";
		}
			}
		}
			elseif((strcmp($sem,'II'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>201</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>202</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>203</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>204</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>205</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>206</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>207</td>";
		}
			}
		}
			elseif((strcmp($sem,'III'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>301</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>302</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>303</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>304</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>305</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>306</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>307</td>";
		}
			}
		}
			elseif((strcmp($sem,'IV'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>401</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>402</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>403</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>404</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>405</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>406</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>407</td>";
		}
			}
		}
	elseif((strcmp($sem,'V'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>501</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>502</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>503</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>504</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>505</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>506</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>507</td>";
		}
			}
		}
			elseif((strcmp($sem,'VI'))==0)
			{
			for($x=1;$x<=7;$x++)
			{
			
				if ($x=1)
			{
		echo"<td align=center>601</td>";
			}
			if ($x=2)
				{
		echo"<td align=center>602</td>";
				}
			if ($x=3)
				{
			echo"<td align=center>603</td>";
				}
			if ($x=4)
				{
			echo"<td align=center>604</td>";
				}
			if ($x=5)
				{
			echo"<td align=center>605</td>";
				}
			if ($x=6)
				{
			echo"<td align=center>606</td>";
				}
				if ($x=7)
				{
			echo"<td align=center>607</td>";
		}
			}
		}

		
		?></td> <?php 
						 $data=explode(",",$marks);
						 ?>
						
						 </tr>
						 <tr><td align="center">Marks</td><?php 
						 
						 for($i=0;$i<count($data);$i++)
						 {
						 ?>
						 <td align="center">
						 <?php echo $data[$i]; ?>
						 </td>
						 <?php 
						 }
						 ?>
						 </tr>
						</table>
                              <?php mysql_close($conn);?>
</body>
</html>
