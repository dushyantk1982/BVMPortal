<?php
define ("DB_HOST", "localhost");
define ("DB_USER", "bvmgroup_userbvm");
define ("DB_PASS","dushyant12428");
define ("DB_NAME","bvmgroup_bvmclg");
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database"); 

$setCounter = 0;
$setExcelName = "internal_result";
$setSql = "select file_no, paper_code, marks from internal_record";
$setRec = mysql_query($setSql);
$setCounter = mysql_num_fields($setRec);
for ($i = 0; $i < $setCounter; $i++)
{
 $setMainHeader .= mysql_field_name($setRec, $i)."t";
}
while($rec = mysql_fetch_row($setRec))
{
 $rowLine = '';
 foreach($rec as $value)
 {
  if(!isset($value) || $value == "")
  {
   $value = "t";
  }
  else
  {
   //It escape all the special charactor, quotes from the data.
   $value = strip_tags(str_replace('"', '""', $value));
   $value = '"' . $value . '"' . "t";
  }
  $rowLine .= $value;
 }
 $setData .= trim($rowLine)."n";
}
$setData = str_replace("r", "", $setData);
if ($setData == "")
{
 $setData = "nno matching records foundn";
}
$setCounter = mysql_num_fields($setRec);
 //This Header is used to make data download instead of display the data
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$setExcelName."_Reoprt.xls");
header("Pragma: no-cache");
header("Expires: 0");
 //It will print all the Table row as Excel file row with selected column name as header.
  echo ucwords($setMainHeader)."n".$setData."n"; 

?>