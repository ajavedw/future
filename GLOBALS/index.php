<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="querystring.php">
        <input type="text" name="nameget">
        <input type="text" name="genderget">
        <input type="number" name="locget" id="">
        <input type="submit" name="submitget" value="submitget">
    </form>

    <form method="post" action="querystring.php" style="margin-top:15px;">
        <input type="text" name="namepost">
        <input type="text" name="genderpost">
        <input type="number" name="locpost" id="">
        <input type="submit" name="submitpost" value="submitpost">
    </form>

</body>
</html>