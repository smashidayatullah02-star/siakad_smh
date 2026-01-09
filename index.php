<?php

session_start();

//ambil nilai
require("inc/config.php");
require("inc/fungsi.php");



//re-direct
$ke = "login.php";
xloc($ke);
exit();
?>