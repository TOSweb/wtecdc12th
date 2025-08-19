<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','wtecdc');
define('DB_PASS' ,'C0%sVhV];?Ny');
define('DB_NAME', 'wtecdc');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>