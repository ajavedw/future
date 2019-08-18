<?php  
$dbserver = "localhost";
$dbname = "loginsystemtut";
$dbusername = "root";
$dbpassword  ="";
$dbName  = "loginsystemtut";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbName);

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}

?>