<?php




$dbhost="localhost";  
$dbusername="root";   
$dbpassword="";   
$dbname="feedback"; 

$connect = mysql_connect($dbhost, $dbusername, $dbpassword);

$db = mysql_select_db($dbname,$connect) or die ("Could not select database");
?> 


