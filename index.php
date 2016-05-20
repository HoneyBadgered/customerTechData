<?php
session_start();
ob_start();


$servername = "*******";
$username = "*******";
$password = "*******";
$db_name = "*******";
$tbl_name="*******";

mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if($_POST) {
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];

	$sql="SELECT * FROM $tbl_name WHERE username='" . $myusername . "' and password='" . $mypassword . "'";
	//echo $sql;
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);

	if($count == 1) {
		$_SESSION['username'] = $myusername;
		$_SESSION['firstname']=$row["firstname"];
		$_SESSION['id']=$row["id"];
		if($row["type"] == "a") {
			header("location: admin.php");		
		} else {
			header("location: techmain.php");	
		}	
	} else {
		echo "Wrong Username or Password";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>NuwavePoolsLogin</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
	<style type="text/css">

	
	body {
		margin:0;
		background-color: #F2F7FF;
	}
	
	h1 { 
	
		text-align: center;
		color: #F2F7FF;
		
	}
	
	#container {
		height: 800px;
  		width: 100%;
  		background: #F2F7FF;
	
	}
	
	#bigBox {
		background-color: #E0EBEB;
		width: 400px;
  		margin: 0 auto;
  		border-radius: 25px;
    	border: 2px solid #E0EBEB ;

	}
	
	#loginBox {
		text-align: center;
		
		
	}
	
	.remember_me {
		text-align: center;
		
	
	}
	
	.submit{
		text-align: center;
	}
	
	
	
	
	</style>

</head>
	
<body>

<h1> <b>NuWave Pools</b> </h1>



	<div id="container">
	
		<div id="bigBox">
			
			<div id="loginBox">
				<h2> Login </h2>
				 <form method="post" action="">
        			<p><input type="text" name="username" value="" placeholder="Username" ></p>
       			    <p><input type="password" name="password" value="" placeholder="Password"></p>
       			    	<p class="remember_me">
          					<label>
            					<input type="checkbox" name="remember_me" id="remember_me">
            							Remember me on this device
         				 	</label>
       				 	</p>
       			 <p class="submit"><input type="submit" name="Submit" value="Login"></p>
     			 </form>
			
			
			</div>
		
		</div>
		
		
	</div>
	
</body>
</html>

<!-- <?php var_export($_SESSION); ?> -->

<?php

ob_end_flush();

?>


