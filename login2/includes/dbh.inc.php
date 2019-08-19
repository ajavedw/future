<?php  

$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "auth";

try {
    $handle = new PDO("mysql:host=$dbserver;dbname=$dbname","$dbusername","$dbpassword");
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
} catch (PDOException $e) {
    die ("not conected");
    $e->getMessage();
    echo $e;
}

?>