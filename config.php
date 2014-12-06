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

$result = mysqli_query($conn, "SELECT * FROM test");
while($row = mysqli_fetch_array($result)) {
    echo $row;
}

//Select a database to work with
//$selected = mysql_select_db("hackathon",$conn)
 // or die("Could not select database");
 
?> 