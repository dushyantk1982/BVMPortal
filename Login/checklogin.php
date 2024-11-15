<?php session_start();
  $_SESSION['user']=@$user;
  $_SESSION['pass']=@$pass;
  ?>
<?php

if(@$_REQUEST['login'])
{
@$user=$_POST['user'];
@$pass=$_POST['pass'];
if($user=='BVMCollege' && $pass=='admin@bvm1')
{
header('location:home.php');
}
else if($user=='office' && $pass=='bvm@123')
{
header('location:office.php');
}
else
{
header('location:Login1.php?msg=error');
}
}
?>