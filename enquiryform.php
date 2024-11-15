<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style7 {font-size: 24px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #003333;font-weight:900;}
-->
</style>
</head>

<body>
<table width="60%" align="center"><tr><td>
<div style="border:solid;border-color:#003333;">
                        <!--<form action=""<?php //echo $_SERVER['PHP_SELF']; ?>"" method="post" name="form1" enctype="multipart/form-data">-->
						<form action="enquiryform.php?id=enquiryform" method="post" id="form1" name="form1">
                          <table width="100%" align="center">
                            <tr><td align="center" colspan="2"><div class="style7">Admission Enquery</div><hr /></td></tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Name</div></td>
                              <td width="100%"><label>
                                <input name="name" type="text" id="name"  />
                              </label></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Email</div></td>
                              <td width="100%"><label>
                                <input name="email" type="text" id="email" />
                              </label></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Contact</div></td>
                              <td width="100%"><input name="contact" type="text" id="contact" /></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%"><select name="course" id="course">
                                  <option>MBA</option>
                                  <option>MCA</option>
                                  <!--<option>BE</option>-->
                                  <!--<option>BBA</option>-->
                                  <option>BCA(MCRPV)</option>
                                  <option>B.Ed</option>
                                  <option>D.Ed</option>
								  <option>N.T.T.</option>
								  <option>PGDCA(MCRPV)</option>
								  <option>DCA(MCRPV)</option>
                                </select>                              </td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Message</div></td>
                              <td width="100%"><textarea name="msg" id="msg"></textarea></td>
                            </tr>
                            <tr>
                              <td colspan="2"><div align="center" class="style31">
                                  <input name="submit" type="submit" class="style30" value="Submit" />
                              </div></td>
                            </tr>
                          </table>
						 
                        </form> </div></td></tr>
                        </table>
                        </div>
						
<?php
/*if ($_SERVER['REQUEST_METHOD']=="POST"){

	@$name=$_POST['name'];
	@$email=$_POST['email'];
	@$course=$_POST['course'];
	@$msg=$_POST['msg'];
	@$contact=$_POST['contact'];
	$today = date("y-m-d");

   // Set the "To" email address
   $to="dushyant12428@gmail.com";

	//Subject of the mail
   $subject="Enquiry";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">"."<".stripslashes($_POST['course']).">"."<".stripslashes($_POST['msg']).">"."<".stripslashes($_POST['contact']).">"."<".stripslashes($_POST['today']).">";
	
	// Check for empty fields
   if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['course']) || empty($_POST['msg']) || empty($_POST['contact']) || empty($_POST['today']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$course = $_POST['course'];
	$msg = $_POST['msg'];
	$contact = $_POST['contact'];
	$today = $_POST['today'];

	// Check the email address
	/*if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}
*/
   // Now Generate a random string to be used as the boundary marker
   //$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   //$tmp_name = $_FILES['filename']['tmp_name'];
   //$type = $_FILES['filename']['type'];
   //$file_name = $_FILES['filename']['name'];
   //$size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
  // $message = "\n\n Name: $name \n\n Email: $email_address \n\nCourse: $course \n\nMessage: $msg \n\nContact No: $contact \n\nPost Date: $today";

   // Check if the upload succeded, the file will exist
  // if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
    //  if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
    //     $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
     //    $data = fread($file,filesize($tmp_name));

         // close the file
    //     fclose($file);

         // Now we need to encode it and split it into acceptable length lines
  //       $data = chunk_split(base64_encode($data));
  //   }

      // Now we'll build the message headers
    //  $headers = "From: $from\r\n" .
      //   "MIME-Version: 1.0\r\n" .
        // "Content-Type: multipart/mixed;\r\n" .
         //" boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
   //   $message = "This is a multi-part message in MIME format.\n\n" .
   //      "--{$mime_boundary}\n" .
   //      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
   //      "Content-Transfer-Encoding: 7bit\n\n" .
   //      $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
     // $message .= "--{$mime_boundary}\n" .
      //   "Content-Type: {$type};\n" .
     //    " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
     //    "Content-Transfer-Encoding: base64\n\n" .
     //    $data . "\n\n" .
     //    "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      /*if (@mail($to, $subject, $message ))
	  {
         echo "<div><center><h4 style='color:#d40000; font-style:normal'>"."Thank You for submitting your information..." . " <b>$name </b>" . "<br> Our representative will get in touch with you shortly..."."</h4></center><br><br></div>";
	  }else
	  {
         ?>
         <div><center>
           <h1>Error !! Unable to send Mail..</h1></center></div>
         <?php
	  }
   }*/
//}

if(@$_REQUEST['submit'])
{
//echo "hello";
@$name=$_POST['name'];
@$email=$_POST['email'];
@$course=$_POST['course'];
@$msg=$_POST['msg'];
@$contact=$_POST['contact'];
$today = date("Y-m-d");

@$dbhost = 'localhost';
@$dbuser = 'bvmgroup_userbvm';
@$dbpass = 'dushyant12428';
mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());
//mysql_connect('localhost','root','') || die('Could not connect: ' . mysql_error());

@$sql ="INSERT INTO `bvmgroup_bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email','$msg');";
//echo "INSERT INTO `bvmgroup_bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email', '$msg');";

mysql_select_db('bvmclg');
@$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Thank You <br />We will get back to you very soon.<br>";
mysql_close();
//header("location:thank.php?id=$name");
}
?>


</body>
</html>
