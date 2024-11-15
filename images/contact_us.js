//©Xara Ltd
if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)contact_us.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".contact_us_menu {z-index:999;border-color:#000000;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#1f5b0b;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".contact_us_plain, a.contact_us_plain:link, a.contact_us_plain:visited{text-align:left;background-color:#1f5b0b;color:#f8fcf7;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:9pt;font-family:Georgia, Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.contact_us_plain:hover, a.contact_us_plain:active{background-color:#a8e9a6;color:#115812;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:9pt;font-family:Georgia, Times New Roman, Times, serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0x115812;
var bc=0xa8e9a6;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("",0,0,2,0,0)
mainMenuItem("contact_us_b1",".gif",27,125,loc+"../index.php","","Home",2,2,"contact_us_plain");
mainMenuItem("contact_us_b2",".gif",27,125,loc+"../about.php","","About us",2,2,"contact_us_plain");
mainMenuItem("contact_us_b3",".gif",27,125,loc+"../acadamic.php","","Academics",2,2,"contact_us_plain");
mainMenuItem("contact_us_b4",".gif",27,125,loc+"../admission.php","","Courses",2,2,"contact_us_plain");
mainMenuItem("contact_us_b5",".gif",27,125,loc+"../tp.php","","Placement",2,2,"contact_us_plain");
mainMenuItem("contact_us_b6",".gif",27,125,loc+"../contact.php","","Contact Us",2,2,"contact_us_plain");
endMainMenu("",0,0);

startSubmenu("contact_us_b4","contact_us_menu",125);
submenuItem("MCA",loc+"../admission.php?id=1","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("MBA",loc+"../admission.php?id=2","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
/*submenuItem("B.E.",loc+"../admission.php?id=3","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
*/submenuItem("BBA ",loc+"../admission.php?id=5","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("BCA ",loc+"../admission.php?id=4","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("B.Ed ",loc+"../admission.php?id=6","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("D.Ed ",loc+"../admission.php?id=7","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("N.T.T. ",loc+"../admission.php?id=8","","contact_us_plain");
endSubmenu("contact_us_b4");

startSubmenu("contact_us_b3","contact_us_menu",158);
/*submenuItem("Programs",loc+"../acadamic.php?id=1","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
*/submenuItem("Calender",loc+"..//acadamic.php?id=2","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("Syllabus",loc+"../acadamic.php?id=3","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("Teaching Methodology",loc+"../acadamic.php?id=4","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
endSubmenu("contact_us_b3");

startSubmenu("contact_us_b2","contact_us_menu",125);
submenuItem("Vision & mission",loc+"../about.php?id=5","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("Governance",loc+"../about.php?id=4","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("Institutes",loc+"../about.php?id=1","","contact_us_plain");
submenuItem("---","javascript:;","","contact_us_plain");
submenuItem("How to reach",loc+"../about.php?id=3","","contact_us_plain");
endSubmenu("contact_us_b2");

loc="";
