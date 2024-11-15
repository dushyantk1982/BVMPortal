<?php
setcookie("course",$_POST["course"]);
setcookie("sem",$_POST["sem"]);
setcookie("internal",$_POST["internal"]);
setcookie("year",$_POST["year"]);

header('Location:internalpage2.php');
?>
