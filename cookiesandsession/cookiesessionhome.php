<?php
session_start();
$_SESSION['username'] = "ajaved";
echo $_SESSION['username'];
//setcookie("");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="cookiesessionhome.php">Home</a>
<a href="cookiesessioncontact.php">Contact</a>

<?php
if (!(isset($_SESSION['username']))){
    echo "You are not logged in";
    }else if ((isset($_SESSION['username']))){
        "You are logged in";
    }
?>
        
</body>
</html>