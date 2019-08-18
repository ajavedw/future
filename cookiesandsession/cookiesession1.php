<?php
$expiry = new DateTime('+1 year');
setcookie('language','EN-US', $expiry->getTimestamp());

var_dump($_COOKIE);
if (isset($_COOKIE['language'])) {
    echo $_COOKIE['language'];
    # code...
}
?>