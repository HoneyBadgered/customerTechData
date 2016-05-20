<?php

include("topinclude.php");

if($_POST){    
    $myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	$mytype=$_POST['type'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['firstname'];

$sql = "INSERT INTO users (username, password, type, firstname, lastname)
VALUES ('$myusername', '$mypassword', '$mytype', '$firstname', '$lastname')";

if (mysql_query($sql)) {
    header("location: admin.php");
} else {
	echo $sql;
	echo '<br />';
    echo "Error: " . mysql_error();
}
}


?>

<!doctype html>
<html>
<head>
    <title>Add New User</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
	<style type="text/css">

	
	body {
		margin:0;
		background-color: #5CD6FF;
	}
	
	h1 { 
	
		text-align: center;
		color: #191935;
		
	}
	
	#container {
		height: 800px;
  		width: 100%;
  		background: #5CD6FF;
	
	}
	
	#bigBox {
		background-color: #E0EBEB;
		width: 400px;
  		margin: 0 auto;
  		border-radius: 25px;
    	border: 2px solid #E0EBEB ;

	}
	
	#input_form {
		text-align: center;
		
		
	}
	</style>

</head>
	
<body>

<h1> <b>Add new user</b> </h1>



	<div id="container">
	
		<div id="bigBox">
			
			<div id="input_form">
	
				 <form method="post" action="">
    				<p>
        				<label for="username">User Name:</label>
       					 <input type="text" name="username" value="" placeholder="User Name" >
    				</p>
    				<p>
       					 <label for="password">Password:</label>
        				<input type="text" name="password" value="" placeholder="Password" >
    				</p>
    				<p>
       					 <label for="firstname">First Name:</label>
        				<input type="text" name="firstname" value="" placeholder="First Name" >
    				</p>
    				<p>
       					 <label for="lastname">Last Name:</label>
        				<input type="text" name="password" value="" placeholder="Last Name" >
    				</p>
    				<p>
        				<select name="type">
   							 <option value="t">Technician</option>
    						 <option value="a">Administration</option>
    
  						</select>
    				</p>
    					<input type="submit" value="Add Records">
				</form>
			
			</div>
		
		</div>
		
		
	</div>
</body>
</html>	

	
<?php

ob_end_flush();

?>
	