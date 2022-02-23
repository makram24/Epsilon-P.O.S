<?php
include("constants.php");
$date = date('D, F, Y');
    @mysql_pconnect(DB_SERVER,DB_USER,DB_PASS) or die('error in connect in database');
    @mysql_select_db(DB_NAME) or die(mysql_error());
    mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
?>
