<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style8 {
	font-size: 18px;
	color: #003333;
}
.style9 {
	font-size: 14px;
	color:#CC3300;
}
a:hover{
text-decoration:none;
color:#000000;
}
a{text-decoration:none;}

-->
</style>
<script type="text/javascript">
function update(str)
   {
   //alert(str);
      var xmlhttp;
 
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }	
 
      xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","demo.php?opt="+str, true);
      xmlhttp.send();
  }
</script>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="right"></div>
		<div class="layer1">
			<table width="100%">
    			<tr>
      				<td width="25%">
						<div align="right">
							<input type="image" src="images/logo.jpg" align="middle" width="100" height="80" />&nbsp;&nbsp;
						</div>
					</td>
					<td width="75%" valign="middle">
						<div align="left">
							<span class="logo">BVM Group of Colleges</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%"><!--<div align="left"><a href="https://www.facebook.com/bvmcme" title="FaceBook"><img src="../images/fb.png" height="15" width="15" /></a>&nbsp;<a href="www.gmail.com" title="Gmail"><img src="../images/gmail.png" height="17" width="17" /></a>&nbsp;<a href="#" title="Admin"><img src="../images/lock.gif" height="15" width="15" /></a></div>--></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
			</table>
			<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Welcome to BVM Faculty Group</span>
				</marquee>
			</span>
		</div>
		<div class="layer2"></div>
	</div>


<form name="myform" id="myform" action="faculty_reg_val.php" method="post">
<!--<div align="center"><img src="images/bvm.jpg" height="200" width="600" /></div>-->
<table width="30%" align="center" bordercolor="#003333" class="pagefont">
	<tr>
		<td align="center" colspan="9">
			<h3 class="style13 style8">Faculty Registration<hr /> </h3>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="9">
			<tr>
				<td width="19%">
					<div align="left" class="style8">Name</div>
				</td>
				<td width="30%">
                   	<input name="faculty_name" class="faculty_name" type="text" id="faculty_name" placeholder="Enter Full Name" />
                   </td>
			</tr>
           
			<tr>
               	<td width="19%"><div align="left" class="style8">Faculty Id</div></td>
                   	<td width="30%">
                       	<input name="fac_id" class="fac_id" type="text" id="fac_id" placeholder="Choose Faculty Id"  />
                    </td>
			</tr>
			<!--<tr>
               	<td><div align="left"><a href="" class="style9" onclick="update('this'.'value');">Check Id</a></div></td>
				<td><div align="left"><?php //echo $_REQUEST['res']; ?></div></td>
			</tr>-->
			<tr>
               	<td width="19%"><div align="left" class="style8">Password</div></td>
                   	<td width="30%">
                       	<input name="password" class="password" type="password" id="password" placeholder="Create Password"  />
                    </td>
			</tr>
			<tr>
               	<td width="19%"><div align="left" class="style8">Confirm</div></td>
                   	<td width="30%">
                       	<input name="re_password" class="re_password" type="password" id="re_password" placeholder="Re-Enter Password"  />
                    </td>
			</tr>
			 <tr>
               	<td width="19%"><div align="left" class="style8">Contact</div></td>
                   	<td width="30%">
                       	<input name="contact" class="contact" type="text" id="contact" placeholder="Mobile Number"  />
                    </td>
			</tr>
			<tr>
               	<td width="19%"><div align="left" class="style8">Department</div></td>
                   	<td width="30%">
                       	<select name="dept">
							<option value="">--Select--</option>
							<option value="IT">IT</option>
							<option value="MGMT">MGMT</option>
						</select>
                    </td>
			</tr>
			<tr>
               	<td width="19%"><div align="left" class="style8">Designation</div></td>
                   	<td width="30%">
                       	<select name="design">
							<option value="">--Select--</option>
							<option value="Faculty">Faculty</option>
							<option value="HOD">HOD</option>
							<!--<option value="Exam Controller">Exam Controller</option>-->
						</select>
                    </td>
			</tr>
			<tr>
				<td colspan="9" align="center">
					<div align="center" class="style31">
                    	<input type="submit" id="submit" name="submit" class="style30" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php"><span class="style14 style13">Home</span></a></div>
				</td>
			</tr>
		</td>
	</tr>
</table>
<div align="center">
	<?php
		if(@$_REQUEST['msg']=='error')
		{echo "Faculty Id has already registered please create another id";}
	?>
</div>

</form></div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
/*jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    password: "required",
    re_password: {
      equalTo: "#password"
    }
  }
});*/
</script>
<script>
$(document).ready(function(){
	$('#submit').click(function(event){
		name=$('.faculty_name').val();
		var name=name.length;
		if(name<1)
		{
			alert("Faculty Name can not be blank");
			event.preventDefault();
		}
		id=$('.fac_id').val();
		var id=id.length;
		if(id<1)
		{
			alert("Faculty Id can not be blank");
			event.preventDefault();
		}
		password=$('.password').val();
		var password=password.length;
		if(password<1)
		{
			alert("Password can not be blank");
			event.preventDefault();
		}
		re_password=$('.re_password').val();
		var re_password=re_password.length;
		if(re_password<1)
		{
			alert("Confirm Password can not be blank");
			event.preventDefault();
		}
		contact=$('.contact').val();
		var contact=contact.length;
		if(contact<1)
		{
			alert("Contact No can not be blank");
			event.preventDefault();
		}
		if($('.password').val() != $('.re_password').val())
		{
			alert("Password and Confirm password don't match");
			event.preventDefault();
		}
		
	});
});
</script>
</body>
</html>
