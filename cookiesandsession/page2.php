<?php
session_start();
$num = $_SESSION['name'];
$rabta = $_SESSION['email'];
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>

<body>

    <?php echo $num;

    ?>
    <a href="page3.php">go to page 3</a>
</body>

</html>