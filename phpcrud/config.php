<?php
/* $server= "localhost";
$username = "root";
$password = "";
$db = "phpcrud";

$conn = new mysqli($server, $username, $password, $db);

if ($conn ->connect_error)
{
    die("Databse failed:".$conn->connect_error);
} */


?>

<?php

$servername= "localhost";
$username= "root";
$password = "";
$db = "phpcrud";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Dtabase failed:".$conn->connect_error);
}
?>