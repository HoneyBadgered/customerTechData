<?php

include("topinclude.php");

if($_POST){
    
$mynamefirst=$_POST['name_first'];
$mynamelast=$_POST['name_last'];
$myaddress=$_POST['address'];

$sql = "INSERT INTO customers (name_first, name_last, address)
VALUES ('$mynamefirst', '$mynamelast', '$myaddress')";

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
    <title>Add New Customer</title>

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

<h1> <b>Add new customer</b> </h1>



	// <div id="container">
	
		<div id="bigBox">
			
			<div id="input_form">
	
				 <form method="post" action="">
    <p>
        <label for="name_first">First Name:</label>
        <input type="text" name="firstname" value=""  >
    </p>
    <p>
        <label for="name_last">Last Name:</label>
        <input type="text" name="lastname" value=""  >
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" value=""  >
    </p>
    <input type="submit" value="Add Records">
</form>
			
			</div>
		
		</div>
		
		
	</div>
	
</body

</html>
	
	
<?php

ob_end_flush();
?>
