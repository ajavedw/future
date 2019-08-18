<?php

$name_error =
    $email_error =
    $phone_error =
    $url_error =
    $message_error = "";


function input_test($userdata)
{
    $userdata = trim($userdata);
    $userdata = stripslashes($userdata);
    $userdata = htmlspecialchars($userdata);
    return $userdata;
}
