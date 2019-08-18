<?php
session_start();
if (($_SESSION['username']=="")) {
    print_r( $_SESSION['username']);
    //header('Location:page1.php');
    //exit();
}
$username = $_SESSION['username'];
$url = "page3.php?username=". $username;
echo "Hi $username, wanna go to <a href='$url'>page3</a>";
?>