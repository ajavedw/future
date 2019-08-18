<?php 
setcookie('username', Frank, time()+ (3600*60));
//delete cookie
if(isset($_COOKIE['username'])){
    echo " User " . $_COOKIE['username'] . " is set";
} 
?>