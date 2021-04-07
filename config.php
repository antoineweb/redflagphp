<?php


/* Config */

//Database Host
$db_host = 'localhost:3306';

//Database Name
$db_database = 'redflag';

//Database Username
$db_user = 'antoine';

//Database Password
$db_pass = 'x0045007';


$conn = new mysqli($db_host ,$db_user,$db_pass,$db_database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>