<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phonedirectoy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$selectdb= mysql_select_db($dbname) or die("Couldn't select db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>