<?php
$servername = "54.174.150.51";
$username = "root";
$password = "qwerty";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Select a database to work with
$selected = mysqli_select_db("hackathon",$conn)
  or die("Could not select database");
?> 