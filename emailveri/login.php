<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 form-div">
                <form action="login.php" method="post">
                   <h3 class="ta-c">Login</h3>
                    <div class="form-group">
                        <label for="username">Username or Email?</label>
                        <input type="text" name="username" id="" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="" class="form-control form-control-lg">

                    <div class="form-group mt-10">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <p class="ta-c">Aready a member <a href="login.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>

<script defer="defer" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>