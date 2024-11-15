<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
</head>

<body>

<!--<fieldset>-->
	
	<img src="upcomingevents/images/up01.jpg" alt="rotating image" name="cmatrotator" width="210" height="23" id="cmatrotator" />		<hr />
	<table>
		<tr><td><a href="upcomingevents/notice.pdf" target="_blank">5<sup>th</sup> National Conference on E-Governance - The Futuristic Growth of Indian Economy on 23<sup>th</sup> & 24<sup>th</sup>Jan-2016</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
	</table>
<!--</fieldset>-->
<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('cmatrotator');
	var imageDir = 'upcomingevents/images/';
	var delayInSeconds = 1;
	var images = ['up02.jpg','up03.jpg','up01.jpg','up02.jpg','up03.jpg','up01.jpg'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 500);
	})();
    </script>

</body>
</html>
