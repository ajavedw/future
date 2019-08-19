<?php
session_start();
if (($_SESSION['username']=="")) {
    header('Location:page1.php');
    exit();
}
echo "get is". $_GET['username'];
echo "SESSIOn is". $_SESSION['username'];
$username = $_SESSION['username'];
$url = "page1.php?username=". $username;
echo "Hi $username, wanna go to <a href='$url'>page1</a>";
session_destroy();
