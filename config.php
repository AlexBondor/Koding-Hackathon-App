<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "qwerty";
$database = "hackathon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = mysql_query("SELECT * FROM test");
while($row = mysql_fetch_array($result)) {
    echo $row;
}

//Select a database to work with
//$selected = mysql_select_db("hackathon",$conn)
 // or die("Could not select database");
 
?> 