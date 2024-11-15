<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<center>
<em><strong><span class="style1" style="color:#000066;"><u>Aquired Update</u></span></strong></em><br /></center>
<hr />
<?php 
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('bvmgroup_bvmclg');
$res=mysql_query("select * from notice order by id DESC",$conn);
$last_date= ''; 
while($r=mysql_fetch_array($res))
{
if($r['size']==0){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='#' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
}
else if($r['size']==1){
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['message']."</a></td></tr></table>";
$last_date = $r['created'];  
}
else
{
$date = ($last_date == $r['created']) ? '' : $r['created'];
echo "<table><tr><td colspan='2'><em><strong><span class='style1' style='color:#000066;'><u>".$date."</u></span></strong></em></td></tr><tr><td>*</td><td>
&nbsp;<a href='student/notice/".$r['name']."' target='_blank' style='color:#000066; text-decoration:none;'>".$r['name']."</a></td></tr></table>";
$last_date = $r['created'];
}  
}

/*while($r=mysql_fetch_array($res))
{
echo "<em><strong><span class='style1' style='color:#000066;'>".$r['created']."</span></strong></em><br />
&nbsp;<a href='student/notice/".$r['name']."' target='_blank' style='color:#000066;'>".$r['name']."</a>
<br />
<br />";
}*/
mysql_close();
?>

<!--<em><strong><span class="style1" style="color:#000066;">21 Oct 2014</span></strong></em><br />
&nbsp;<a href="student/notice/Time Table Nov. 2014 Second  Sessional.pdf" target="_parent" style="color:#000066;">Second Internal Timetable</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">15 Oct 2014</span></strong></em><br />
&nbsp;<a href="#" target="_parent" style="color:#000066;">Assignment are availabe on Student Desk: Last date of submission is 10/11/2014.</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">13 Oct 2014</span></strong></em><br />
&nbsp;<a href="student/notice/notice13052014.pdf" target="_parent" style="color:#000066;">Notice regarding project file and practical file for MCA V Sem</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">13 Oct 2014</span></strong></em><br />
&nbsp;<a href="student/notice/Changed Schedule.pdf" target="_parent" style="color:#000066;">First Internal result announced</a>
<br />
<br /><em><strong><span class="style1" style="color:#000066;">24 Sep 2014</span></strong></em><br />
&nbsp;<a href="student/notice/Changed Schedule.pdf" target="_parent" style="color:#000066;">Second & Third Internal Schedule has been changed....</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">22 Sep 2014</span></strong></em><br />
&nbsp;<a href="student/notice/picnic circular.PDF" target="_parent" style="color:#000066;">One day picnic has been scheduled on 08/10/2014</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">18 Sep 2014</span></strong></em><br />
&nbsp;<a href="index.php?id=64" target="_parent" style="color:#000066;">Assignments will be available at portal on 01/10/2014 and the last date of assignment submission will be 10/11/2014</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">10 Sep 2014</span></strong></em><br />
&nbsp;<a href="index.php?id=64" target="_parent" style="color:#000066;">Research Workshop on Eviews Software on 12/09/2014</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">06 Sep 2014</span></strong></em><br />
&nbsp;<a href="student/notice/time table first sessional Sept 2014.pdf" style="color:#000066;">Time table of First Internal</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">03 Sep 2014</span></strong></em><br />
&nbsp;<a href="#" style="color:#000066;">First Internal will be conducted on 15/09/2014</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">06 Aug 2014</span></strong></em><br />
&nbsp;<a href="#" style="color:#000066;">Major Research Project Report viva of MBA IV Sem:17/08/2014</a>
<br />
&nbsp;<a href="#" style="color:#000066;">Comprehensive viva of MBA IV Sem:22/08/2014</a>
<br />
&nbsp;<a href="#" style="color:#000066;">Comprehensive viva of MBA II Sem:09/08/2014</a>
<br />
&nbsp;<a href="_notes/SIP Format MBA - 2nd.ppt" target="_blank" style="color:#000066;">SIP Format for MBA II Sem</a>
<br /><br />
<em><strong><span class="style1" style="color:#000066;">28 Jul 2014</span></strong></em><br />
&nbsp;<a href="instruction/oops.pdf" target="_blank" style="color:#000066;">The Classes of BCA I Sem(MCRPV) will be commenced from :01/08/2014</a>
<br /><br />
<em><strong><span class="style1" style="color:#000066;">10 Jul 2014</span></strong></em><br />
&nbsp;<a href="instruction/oops.pdf" target="_blank" style="color:#000066;">The Classes of MCA V Sem, BCA V Sem(MCRPV), BCA III Sem(MCRPV) will be commenced from :14/07/2014</a>
<br /><br />
<em><strong><span class="style1" style="color:#000066;">05-July-2014</span></strong></em><br />
<a href="http://www.jiwaji.edu/admin/PDF/Timetable2012/Time-Table%20of%20B.C.A.%20IVth%20Semester%20Exam%20June%202014693.pdf">Time-Table of B.C.A. IVth Semester Exam June 2014</a>
<br />
<a href="http://www.jiwaji.edu/admin/PDF/Timetable2012/Time-Table%20of%20B.C.A.%20IInd%20Semester%20Exam%20June%202014692.pdf">Time-Table of B.C.A. IIth Semester Exam June 2014</a>
<br />
<br />
<em><strong><span class="style1" style="color:#000066;">04-July-2014</span></strong></em><br />
<a href="http://www.jiwaji.edu/admin/PDF/Results2012/RESULT%20OF%20B.C.A%20Ist%20Sem.%20%20(Regular)%20and%20IIIrd%20SEMESTER%20(Regular%20and%20ATKT)%20%20EXAM.DEC.-2013561.pdf">RESULT OF B.C.A Ist Sem. (Regular) and IIIrd SEMESTER (Regular and ATKT) EXAM.DEC.-2013</a>
<br />
<br />
<a href="#">12/07/2014 is Last date of MBA II & IV Sem and BBA II IV sem exam form. </a>
<br />
<br />
--></body>
</html>
