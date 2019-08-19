<?php
if ((!empty($_POST['email'])) && (!empty($_POST['password']))){
$server = 'localhost:8080';
$username= 'root';
$password = 'root';
$database = 'auth';

try {
    //code...
    $conn = new PDO ("mysql:host = $server; dbname = $database;", $username, $password);
} catch (PDOException $e) {
    //throw $th;
    die( "Connection failed: ". $e->getMessage());
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register belows</title>
</head>
<body>
    <h1>Register</h1>
    <h1><a href="login.php">Login</a></h1>
    <h1><a href="index.php">Index</a></h1>
    <form action="login.php" method="post">
        <input type="email" placeholder="email" name="email">

        <input type="password" placeholder="password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">
        <input type="submit" name="submit">
    </form>
    
</body>
</html>