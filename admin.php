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




<html>
<head>
    <title>Admin Main Page</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>    
</head>

<body>
<div>
    <h1>Admin Main Page</h1>
    <p>Hiya, <?php echo $_SESSION['firstname'];?>!</p>
    
    <p><a href="/addnewcustomer.php">Click to add new customer</a></p>
    <p><a href="/addnewuser.php">Click to add new user</a></p>
</div>
</div>
</body>
</html>


<?php

ob_end_flush();
?>


 