//©Xara Ltd
if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)bvmcme.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".bvmcme_menu {z-index:999;border-color:#ffffff;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#5b6ae1;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".bvmcme_plain, a.bvmcme_plain:link, a.bvmcme_plain:visited{text-align:left;background-color:#5b6ae1;color:#ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.bvmcme_plain:hover, a.bvmcme_plain:active{background-color:#0e5cc0;color:#f4f0f0;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.bvmcme_l:link, a.bvmcme_l:visited{text-align:left;background:#5b6ae1 url("+loc+"bvmcme_l.gif) no-repeat right;color:#ffffff;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("a.bvmcme_l:hover, a.bvmcme_l:active{background:#0e5cc0 url("+loc+"bvmcme_l2.gif) no-repeat right;color: #f4f0f0;text-decoration:none;border-color:#ffffff;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:0px 0px 0px 0px;cursor:hand;display:block;font-size:10pt;font-family:Times New Roman, Times, serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0xf4f0f0;
var bc=0x0e5cc0;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("bvmcme_left.gif",25,28,2,0,0)
mainMenuItem("bvmcme_b1",".gif",25,109,loc+"../bvmcme/bvmcme.php","","Home",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b2",".gif",25,109,loc+"../bvmcme/aboutbvm.php","","About us",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b3",".gif",25,109,"javascript:;","","Acedemics",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b4",".gif",25,109,"javascript:;","","Admission",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b5",".gif",25,109,"javascript:;","","Facilities",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b6",".gif",25,109,"javascript:;","","Campus Life",2,2,"bvmcme_plain");
mainMenuItem("bvmcme_b7",".gif",25,109,"javascript:;","","Contact Us",2,2,"bvmcme_plain");
endMainMenu("bvmcme_right.gif",25,28)

startSubmenu("bvmcme_b5","bvmcme_menu",109);
submenuItem("Laboratories","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("Library","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("Wifi","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("Hostel","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("Scholarships","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
endSubmenu("bvmcme_b5");

startSubmenu("bvmcme_b4","bvmcme_menu",109);
submenuItem("MBA",loc+"../addmission/mba.php","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("MCA","javascript:;","","bvmcme_plain");
endSubmenu("bvmcme_b4");

startSubmenu("bvmcme_b3_1","bvmcme_menu",137);
submenuItem("Management","javascript:;","","bvmcme_plain");
submenuItem("---","javascript:;","","bvmcme_plain");
submenuItem("Computer Applications","javascript:;","","bvmcme_plain");
endSubmenu("bvmcme_b3_1");

startSubmenu("bvmcme_b3","bvmcme_menu",109);
mainMenuItem("bvmcme_b3_1","Departments",0,0,"javascript:;","","",1,1,"bvmcme_l");
endSubmenu("bvmcme_b3");

loc="";
