<?php
echo "hello";
@$name=$_POST['name'];
@$email=$_POST['email'];
@$course=$_POST['course'];
@$msg=$_POST['msg'];
@$contact=$_POST['contact'];
$today = date("Y-m-d");

@$dbhost = 'mysql.iserverplanet.com';
@$dbuser = 'bvmgroup';
@$dbpass = 'PWD@bvm1';
mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());

@$sql ="INSERT INTO `bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email','$msg');";
echo "INSERT INTO `bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email', '$msg');";

mysql_select_db('bvmclg');
@$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Thank Yoy\nWe will get back to you very soon.<br>";
mysql_close();
header("location:thank.php?id=$name");

?>
