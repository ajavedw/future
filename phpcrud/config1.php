<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpcrud1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die("Database failed:".$conn->connect_error);
}
?>