<?php
if ((!empty($_POST['email'])) && (!empty($_POST['password']))){
echo $_POST['email'];
echo $_POST['password'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login below</title>
</head>

<body>
    <div class="header">

    </div>
    <h1>Login below</h1>
    <form action="login.php" method="post">
        <input type="email" placeholder="email" name="email">

        <input type="password" placeholder="password" name="password">
        <input type="submit" name="submit">
    </form>

    <h1><a href="index.php">Index</a></h1>
    <h1><a href="register.php">Register</a></h1>
</body>

</html>