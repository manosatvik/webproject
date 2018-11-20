<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "manomart";

// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>