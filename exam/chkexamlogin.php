<?php 
	
	$pwd=$_POST['pwd'];
	$fileno=$_POST['fileno'];
	
	if($fileno=='BVMCollege' && $pwd=='exam@')
	{
		header('location:adhome.php');
	}
	else if($fileno=='exam@bvm' && $pwd=='exam_bvm@123')
	{
		header('location:../exam/examhome.php');
	}
	else if($fileno=='meetabhishek' && $pwd=='jain@2015')
	{
		header('location:../mgmt/mgmthome.php');
	}
	else
	{
		header('location:adlogin.php?msg=error');
	}				 
?>