<?php
session_start();
//initialize
$name = "";
$address = "";
$id = 0;
//connect to database
$db = mysqli_connect('localhost','root','','crud');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "Address saved";
    header('location: index.php');


}