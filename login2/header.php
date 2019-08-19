<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href="#"><img src="img/logo.png" alt=""></a>
            <ul>
                <li class="dis-i"><a href="index.php">Home</a></li>
                <li class="dis-i"><a href="#">Portfolio</a></li>
                <li class="dis-i"><a href="#">About</a></li>
                <li class="dis-i"><a href="#">Contact</a></li>
                <li class="dis-i"><a href="#">Home</a></li>
            </ul>
            <div class="col-xs-7">
                <!-- Login -->
                <form action="includes/login.inc.php" method="post">
                    <input type="email" name="mailuid" placeholder="username/e-mail" class="form-control">
                    <input type="password" name="pwd" placeholder="password..." class="form-control">
                    <button type="submit" name="login-submit" class="btn btn-md">Login</button>
                </form>
                <a href="signup.php">Signup</a>
                <!-- Logout -->
                <form action="includes/logiout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="btn btn-md">Logout</button>
                </form>
            </div>
        </nav>
    </header>
    <script defer="defer" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html