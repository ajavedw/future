<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        setcookie('username', $username, time()+3600);

        header('Location: cookie2.php');
    }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username" placeholder="Enter name">
        
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>