//©Xara Ltd
if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)sidemenu.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".sidemenu_menu {z-index:999;border-color:#000000;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#ff7f00;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".sidemenu_plain, a.sidemenu_plain:link, a.sidemenu_plain:visited{text-align:left;background-color:#ff7f00;color:#ffffff;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.sidemenu_plain:hover, a.sidemenu_plain:active{background-color:#999966;color:#000000;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.sidemenu_l:link, a.sidemenu_l:visited{text-align:left;background:#ff7f00 url("+loc+"sidemenu_l.gif) no-repeat right;color:#ffffff;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.sidemenu_l:hover, a.sidemenu_l:active{background:#999966 url("+loc+"sidemenu_l2.gif) no-repeat right;color: #000000;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0x000000;
var bc=0x999966;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("",0,0,1,0,0)
mainMenuItem("sidemenu_b1",".gif",22,160,loc+"../index.php","","MCA",2,2,"sidemenu_plain");
mainMenuItem("sidemenu_b2",".gif",22,160,loc+"../about.php","","MBA",1,2,"sidemenu_plain");
mainMenuItem("sidemenu_b3",".gif",22,160,"javascript:;","","B.E.",1,2,"sidemenu_plain");
mainMenuItem("sidemenu_b4",".gif",22,160,"javascript:;","","BCA",1,2,"sidemenu_plain");
mainMenuItem("sidemenu_b5",".gif",22,160,"javascript:;","","BBA",1,2,"sidemenu_plain");
mainMenuItem("sidemenu_b6",".gif",22,160,"javascript:;","","B.Ed",2,2,"sidemenu_plain");
mainMenuItem("sidemenu_b7",".gif",22,160,"javascript:;","","D.Ed",2,2,"sidemenu_plain");
mainMenuItem("sidemenu_b8",".gif",22,160,"javascript:;","","Diploma",2,2,"sidemenu_plain");
endMainMenu("",0,0);

startSubmenu("sidemenu_b5","sidemenu_menu",120);
submenuItem("UG Courses","javascript:;","","sidemenu_plain");
submenuItem("PG Courses","javascript:;","","sidemenu_plain");
submenuItem("Certificate Courses","javascript:;","","sidemenu_plain");
endSubmenu("sidemenu_b5");

startSubmenu("sidemenu_b4","sidemenu_menu",49);
submenuItem("MCA",loc+"../mca1.php","","sidemenu_plain");
submenuItem("MBA",loc+"../mba1.php","","sidemenu_plain");
submenuItem("B.E.","javascript:;","","sidemenu_plain");
submenuItem("BCA ","javascript:;","","sidemenu_plain");
submenuItem("BBA ","javascript:;","","sidemenu_plain");
submenuItem("B.Ed ","javascript:;","","sidemenu_plain");
submenuItem("D.Ed ","javascript:;","","sidemenu_plain");
submenuItem("N.T.T. ","javascript:;","","sidemenu_plain");
endSubmenu("sidemenu_b4");

startSubmenu("sidemenu_b3_1","sidemenu_menu",137);
submenuItem("Engineering","javascript:;","","sidemenu_plain");
submenuItem("Management","javascript:;","","sidemenu_plain");
submenuItem("Computer Applications","javascript:;","","sidemenu_plain");
submenuItem("Education","javascript:;","","sidemenu_plain");
endSubmenu("sidemenu_b3_1");

startSubmenu("sidemenu_b3","sidemenu_menu",155);
mainMenuItem("sidemenu_b3_1","Departments",0,0,"javascript:;","","",1,1,"sidemenu_l");
submenuItem("Programs","javascript:;","","sidemenu_plain");
submenuItem("Calender","javascript:;","","sidemenu_plain");
submenuItem("Teaching Methodology","javascript:;","","sidemenu_plain");
endSubmenu("sidemenu_b3");

startSubmenu("sidemenu_b2","sidemenu_menu",108);
submenuItem("Vision & mission",loc+"../about.php?id=5","","sidemenu_plain");
submenuItem("Governance",loc+"../about.php?id=4","","sidemenu_plain");
submenuItem("Institutes",loc+"../about.php?id=1","","sidemenu_plain");
submenuItem("Affliation",loc+"../about.php?id=2","","sidemenu_plain");
submenuItem("How to reach",loc+"../about.php?id=3","","sidemenu_plain");
endSubmenu("sidemenu_b2");

loc="";
