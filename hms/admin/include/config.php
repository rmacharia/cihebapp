<?php
define('DB_SERVER','cihebportal-server.mysql.database.azure.com');
define('DB_USER','avbyqzeaym');
define('DB_PASS' ,'2LHnX$4c2l60gkQH');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>