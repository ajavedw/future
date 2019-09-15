<?php

$servername = "localhost";
$name = "root";
$password = "";
$db = "ajaxtest";

$conn = new mysqli($servername, $name, $password, $db);

if ($conn->connect_error) {
    die("Dtabase failed:" . $conn->connect_error);
}

extract($_POST);

if(isset($_POST['submit'])){
    $q= "INSERT INTO userinfo (username,password) VALUES ('$username','$password')";
    $query = mysqli_query($conn,$q);
    header('location:ajax_insert.php');
}

$newq = "SELECT * FROM userinfo";
$newqres = mysqli_query($conn,$newq);

$pwdval = $_GET['forpwd'];

$newq2 = "SELECT password FROM userinfo where id='$pwdval'";

$newq2res = mysqli_query($conn,$newq2);

if (!$newq2res) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$newqresult= mysqli_fetch_array($newq2res);

echo "<pre>";
print_r($newqresult);
echo "</pre>";

?>