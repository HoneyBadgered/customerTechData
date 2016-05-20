<?php
include("topinclude.php");

?>

<!doctype html>
<html>
<head>
    <title></title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
	<style type="text/css">
	
	


	
	
		
		
		
	</style>
	</head>
	
<body>	

<?php echo date('l F dS Y'); ?>

SELECT * FROM customers WHERE id = '$_SESSION['id']'
	
</body

</html>
	
	
<?php

ob_end_flush();
?>