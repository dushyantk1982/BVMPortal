//©Xara Ltd
if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)broker_hnavbar.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".broker_hnavbar_menu {z-index:999;border-color:#000000;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#2838db;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".broker_hnavbar_plain, a.broker_hnavbar_plain:link, a.broker_hnavbar_plain:visited{text-align:left;background-color:#2838db;color:#ffffff;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:9pt;font-family:Georgia, Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.broker_hnavbar_plain:hover, a.broker_hnavbar_plain:active{background-color:#eda793;color:#000000;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:9pt;font-family:Georgia, Times New Roman, Times, serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0x000000;
var bc=0xeda793;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("broker_hnavbar_left.gif",30,20,2,0,0)
mainMenuItem("broker_hnavbar_b1",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../../../../wamp/www/new/index.php","","Home",2,2,"broker_hnavbar_plain");
mainMenuItem("broker_hnavbar_b2",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php","","About us",2,2,"broker_hnavbar_plain");
mainMenuItem("broker_hnavbar_b3",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php","","Academics",2,2,"broker_hnavbar_plain");
mainMenuItem("broker_hnavbar_b4",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php","","Admission",2,2,"broker_hnavbar_plain");
mainMenuItem("broker_hnavbar_b5",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../tp/tp.php","","Placement",2,2,"broker_hnavbar_plain");
mainMenuItem("broker_hnavbar_b6",".gif",30,123,loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../contact/contact.php","","Contact Us",2,2,"broker_hnavbar_plain");
endMainMenu("broker_hnavbar_right.gif",30,20)

startSubmenu("broker_hnavbar_b4","broker_hnavbar_menu",123);
submenuItem("MCA",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=1","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("MBA",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=2","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("B.E.",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=3","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("BCA ",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=4","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("BBA ",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=5","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("B.Ed ",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=6","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("D.Ed ",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=7","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("N.T.T. ",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../addmission/add.php?id=8","","broker_hnavbar_plain");
endSubmenu("broker_hnavbar_b4");

startSubmenu("broker_hnavbar_b3","broker_hnavbar_menu",158);
submenuItem("Programs",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php?id=1","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Calender",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php?id=2","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Apply Online",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php?id=3","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Teaching Methodology",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php?id=4","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Brochure",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../acedemics/acadamic.php?id=5","","broker_hnavbar_plain");
endSubmenu("broker_hnavbar_b3");

startSubmenu("broker_hnavbar_b2","broker_hnavbar_menu",123);
submenuItem("Vision & mission",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php?id=5","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Governance",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php?id=4","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Institutes",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php?id=1","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("Affliation",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php?id=2","","broker_hnavbar_plain");
submenuItem("---","javascript:;","","broker_hnavbar_plain");
submenuItem("How to reach",loc+"../../../../Users/systematic/Documents/My Web Graphics/"+"../about us/about.php?id=3","","broker_hnavbar_plain");
endSubmenu("broker_hnavbar_b2");

loc="";
