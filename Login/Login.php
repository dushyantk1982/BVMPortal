<style type="text/css">
<!--
body {
	background-image: url(../images/NEWSIDE.png);
}
.style1 {
	color: #990000;
	font-size: 18px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<div id="Layer1" style="position:absolute; height:188px; z-index:100000; left: 389px; top: 40%; width: 286px; visibility: inherit; background-color: #CCFF00; layer-background-color: #CCFF00; border: 1px none #000000; background-image: url(../images/news.jpg); layer-background-image: url(../images/news.jpg);">
  <div>
      <form action="checklogin.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('textfield','','R','textfield2','','R');return document.MM_returnValue">
        <blockquote><strong><span class="style1">User
        <input name="user" type="text" class="style1" id="user" size="25" /> 
        Password</span>
        <input name="pass" type="password" class="style1" id="pass" size="25" />
        </strong><strong>
<input name="login" type="submit" class="style1" value="Login" />
        </strong> 
        <div>
          <div align="right"><a href="../index.php"><img src="../images/contact_left.png" alt="Home" width="30" height="30" border="0" align="middle" /></a></div>
        </div>
        </blockquote>
		
    </form>
      <div>
        <div align="center"><?php if(@$_REQUEST['msg']=='error')
		{
		echo "Login failed";
		}?></div>
    </div>
  </div>
  
</div>
