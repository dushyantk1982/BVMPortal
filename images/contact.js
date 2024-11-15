//©Xara Ltd
if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)contact.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".contact_menu {z-index:999;border-color:#ffffff;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#111e86;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".contact_plain, a.contact_plain:link, a.contact_plain:visited{text-align:left;background-color:#111e86;color:#ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.contact_plain:hover, a.contact_plain:active{background-color:#301f97;color:#ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.contact_l:link, a.contact_l:visited{text-align:left;background:#111e86 url("+loc+"contact_l.gif) no-repeat right;color:#ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.contact_l:hover, a.contact_l:active{background:#301f97 url("+loc+"contact_l.gif) no-repeat right;color: #ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0xffffff;
var bc=0x301f97;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("contact_left.gif",25,28,2,0,0)
mainMenuItem("contact_b1",".gif",25,109,loc+"../index.php","","Home",2,2,"contact_plain");
mainMenuItem("contact_b2",".gif",25,109,loc+"../about.php","","About us",2,2,"contact_plain");
mainMenuItem("contact_b3",".gif",25,109,"javascript:;","","Acedemics",2,2,"contact_plain");
mainMenuItem("contact_b4",".gif",25,109,"javascript:;","","Admission",2,2,"contact_plain");
mainMenuItem("contact_b5",".gif",25,109,"javascript:;","","Courses",2,2,"contact_plain");
mainMenuItem("contact_b6",".gif",25,109,"javascript:;","","Facilities",2,2,"contact_plain");
mainMenuItem("contact_b7",".gif",25,109,"javascript:;","","Contact Us",2,2,"contact_plain");
endMainMenu("contact_right.gif",25,28)

startSubmenu("contact_b3_1","contact_menu",137);
submenuItem("Engineering","javascript:;","","contact_plain");
submenuItem("Management","javascript:;","","contact_plain");
submenuItem("Computer Applications","javascript:;","","contact_plain");
submenuItem("Education","javascript:;","","contact_plain");
endSubmenu("contact_b3_1");

startSubmenu("contact_b3","contact_menu",109);
mainMenuItem("contact_b3_1","Departments",0,0,"javascript:;","","",1,1,"contact_l");
submenuItem("Menu Text","javascript:;","","contact_plain");
endSubmenu("contact_b3");

startSubmenu("contact_b2","contact_menu",109);
submenuItem("Institutes","javascript:;","","contact_plain");
submenuItem("Affliation","javascript:;","","contact_plain");
submenuItem("How to reach","javascript:;","","contact_plain");
endSubmenu("contact_b2");

loc="";
