<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Website for Management Education College" />
<meta name="keywords" content="Management,MBA,BBA,MCA,BCA,Bcom,Graduation,PostGraduation" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div align="center" class="homehead">
	<img src="images/18.JPG" alt="rotating image" name="rotator" width="640" height="300" id="rotator" />
</div>
<p>&nbsp;</p>
<!--<div align="left" class="homeleft"><img src="images/usefullinks.png" width="200" height="43" />-->
<?php //include("usefullinks.php"); ?>
<!--</div>-->
<div align="left" class="homecenter">
	<div class="homecenter1">
		<!--<img src="images/update1.jpg" width="100" height="30" /><hr />
		<marquee direction="up" scrolldelay="200" onmouseover="this.stop()" onmouseout=						"this.start()" >-->
			<?php //include("upcomingevents/ncimg.php");//include("update.php"); ?><!--<br /><div align="right"><a href="updates.php">Read More..</a></div>--><hr />
			<?php include("event.php"); ?>
		<!--</marquee>-->
	</div>
</div>


<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('rotator');
	var imageDir = 'images/';
	var delayInSeconds = 3;
	var images = ['22.JPG','23.JPG','25.JPG','7.JPG','14.JPG','5.JPG','8.JPG','6.JPG','9.JPG','15.JPG','16.JPG','18.JPG'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 1000);
	})();
    </script>

</body>
</html>