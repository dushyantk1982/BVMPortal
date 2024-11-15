
<?php  
    
    $name = $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $sub= $_REQUEST["sub"];
    $message = $_REQUEST["message"];

  
    $todayis = date("l, F j, Y, g:i a") ; 
    $subject = "Enquiry From Website " ;
    $to= "info@bvmgroup.org";

$msg.= "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'> ";
$msg.= "<tr>";
$msg.= "<td width='16' height='25'>&nbsp;</td>";
$msg.= "<td width='96'>Name</td>";
$msg.= "<td width='10' height='25'><strong>:</strong></td>";
$msg.= "<td height='25'>$name</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>Email Id </td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>$email</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='25'>&nbsp;</td>";
$msg.= "<td height='25'>Phone No</td>";
$msg.= "<td height='25'><strong>:</strong></td>";
$msg.= "<td height='25'>$phone</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>Subject</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>$sub</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='95'>&nbsp;</td>";
$msg.= "<td height='95'>Message</td>";
$msg.= "<td height='95'><strong>:</strong></td>";
$msg.= "<td height='95'>$message</td>";
$msg.= "</tr>";
$msg.= "</table>";



                 
$headers = "From: $name < $email >."; 
$headers .= "\r\nContent-Type: text/html; charset=ISO-8859-1\r\n"; 

$success=mail($to, $subject, $msg, $headers) ;
	 
echo "<center><div align='center'>";
echo $success;
echo "<h1 style='font-family:arial, verdana; font-size:15pt;'> Your enquiry has been sent successfully!</h1>";
echo "  <br /> ";

?>

