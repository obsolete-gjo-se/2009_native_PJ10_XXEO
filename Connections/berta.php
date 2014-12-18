<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_berta = "localhost";
$database_berta = "interessen";
$username_berta = "root";
$password_berta = "";
$berta = mysql_pconnect($hostname_berta, $username_berta, $password_berta) or trigger_error(mysql_error(),E_USER_ERROR); 
?>