<?php

session_start();

if ( !isset($_SESSION['username']) || $_SESSION['username'] == '') {
	header ("Location: index.php");
}

ob_start();

$servername 	= "*******";
$username 		= "*******";
$password 		= "*******";
$db_name 		= "*******";

mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


?>