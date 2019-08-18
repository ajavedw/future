<?php
phpinfo();
session_start();
echo $_SESSION['username'];
?>

<?php
if (!(isset($_SESSION['username']))){
    echo "You are not logged in";
    }else {
        "You are logged in";
    }
?>