<?php
session_start();
$_SESSION['user']= 22;
$_SESSION['language']= "EN-GB";

unset($_SESSION['user']);


var_dump($_SESSION);
if (isset($_SESSION['language'])) {
    echo $_SESSION['language'];
}

?>