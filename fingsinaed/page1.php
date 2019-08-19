<?php
    session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $_SESSION['username']  = $username;
    //echo $username;
    $url = "page2.php?username=".$username;
    header('Location:'.$url);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pge1</title>
</head>

<body>
    <form action="page1.php" method="post">
        <input type="text" name="username" placeholder="What is your name?">
        <input type="submit" value="save">
    </form>

</body>

</html>