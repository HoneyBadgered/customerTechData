<?php
ob_start();
$servername = "lauren.codelikea.pro";
$username = "lauren";
$password = "LostInspace1";
$db_name = "lauren";
$tbl_name="users";
/*
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 
*/

mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['username'];
$mypassword=$_POST['password'];


$sql="SELECT * FROM $tbl_name WHERE username='" . $myusername . "' and password='" . $mypassword . "'";
//echo $sql;
$result=mysql_query($sql);

//var_export($result);
    

$count=mysql_num_rows($result);
 
//var_export($count);

if($count==1){
	header("location: login_success.php");
	//session_register("username");
	//session_register("password"); 
} else {
	echo "Wrong Username or Password";
}

ob_end_flush();

?>