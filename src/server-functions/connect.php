<?php

$host = "localhost";
$db = "cla";
$user = "root";
$pass = "usbw";

$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($db, $con);

$mysqli = new mysqli($host, $user, $pass, $db);

// deixamdo conexão em UTF-8
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>