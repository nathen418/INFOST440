<?php
//This sets the constants with our connection information
DEFINE ('DB_HOST', ''); //Database server -- Typically "localhost"
DEFINE ('DB_USER', ''); //Database User Name
DEFINE ('DB_PASSWORD', ''); //Database User Password
DEFINE ('DB_NAME', ''); //Database Name

//This connects us to the database
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL server with error: ' . mysqli_connect_error());
?>