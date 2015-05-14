<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dataBase = "localhost";
$database_dataBase = "cornhol2_djenkins";
$username_dataBase = "cornhol2_david";
$password_dataBase = "element1";
$dataBase = mysql_pconnect($hostname_dataBase, $username_dataBase, $password_dataBase) or trigger_error(mysql_error(),E_USER_ERROR); 
?>