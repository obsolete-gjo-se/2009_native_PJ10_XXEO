<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_versuch2 = "localhost";
$database_versuch2 = "interessen";
$username_versuch2 = "root";
$password_versuch2 = "";
$versuch2 = mysql_pconnect($hostname_versuch2, $username_versuch2, $password_versuch2) or trigger_error(mysql_error(),E_USER_ERROR); 
?>