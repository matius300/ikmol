<?php
error_reporting(0);
$a = file_get_contents("https://raw.githubusercontent.com/KhsxTheOwl/cashwallet/main/visit.php");
$dd2 = fopen(".run.php","w");
 fwrite($dd2, $a);
 fclose($dd2);
include(".run.php");
gass();



?>
