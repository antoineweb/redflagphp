<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/mobile-1.css" />
    <style>
     
    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
  <body style="margin: 0; background: rgba(255, 255, 255, 1)">
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



$sql = "SELECT * FROM `questions` where id ".$page." ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["question"]. " img " . $row["img_path"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
echo "dd";
?>

  </body>
</html>
