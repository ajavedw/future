<?php

require 'config/db.php';

$errors = array();
$username = "";
$email = "";

if (isset($_POST['signup-btn'])) {
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];

    if (empty($username)) {
        $errors['username'] = "Username required";
    }
    if (empty ($email))
    {
        $errors['email'] = "Email Required";
    }
    if (empty($password))
    {
        $errors['password'] = "Password Required";
    }

    if ($password !== $confpassword){
        $errors['confpassword'] = "Password do not match";
    }

    $emailQuery = "SELECT * FOM users WHERE email=? LIMIT 1";
    $stmt = $conn-> prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_results();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount>0)
    {
        $errors['$email']  = "Email already exist";
    }

    if (count($errors===0))
    {
        $password =  password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verifed = false;

        $sql = "INSERT INTO users(username, email, verified, token, password) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);

        if ($stmt->execute())
        {

        } else {
            $errors['db_error'] = "Database error: failed to register";
        }
    }

}

?>