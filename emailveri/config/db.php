
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "verify-user";
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if ($conn -> connect_error){
    die ('Database error:'. $conn ->connect_error);
}
?>