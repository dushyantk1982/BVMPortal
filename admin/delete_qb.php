<form action="delete_qb.php?id=delete_qb" method="post">
<select name="name">
<option value="">--Select Paper Code--</option>
<?php
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('bvmgroup_bvmclg');

$res=mysql_query("select * from qb");
  {
  	while($r=mysql_fetch_array($res))
	{
		echo "<option value='".$r['4']."'>".$r['4']."</option>";	
	}
}
?>
</select>
<input type="submit" name="submit" value="Delete" />
</form>


<?php
if($_REQUEST['submit']=='Delete')
{
$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('bvmgroup_bvmclg');




if(unlink('../student/qb/'.$name))
	{
		$result = mysql_query("DELETE FROM qb WHERE name='".$name."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:findqb1.php');

}
?>
