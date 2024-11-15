<?php
	extract($_POST);
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());					 
	
	$q=("delete from internal_record where session='".$session."' or course='".$course."' or internal='".$internal."' or paper_code='".$paper_code."' or file_no='".file_no."'",$conn);
	
	if($session!=' ')
	{
		$q=("delete from internal_record where session='".$session."'",$conn);
	}
	else if($course!=' ' && $internal!=' ')
	{
		$q=("delete from internal_record where course='".$course."' and internal='".$internal."'",$conn);
	}
	else if($internal!=' ')
	{
		$q=("delete from internal_record where internal='".$internal."'",$conn);
	}
	else if($code!=' ' && $internal!=' ')
	{
		$q=("delete from internal_record where internal='".$internal."' and paper_code='".$code."'",$conn);
	}
	else
	{
		$q=("delete from internal_record where internal='".$internal."' or paper_code='".code."' or file_no='".file_no."'",$conn);
	}
	
	mysql_query($q,$conn);
?>
	
