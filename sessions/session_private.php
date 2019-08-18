<?php 
session_start();
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
    <header>
        <h1>Public page</h1>
    </header>
    <main>
        <p>Only <?php 
        echo $_SESSION['bob'];
        ?> 
        can see this page</p>

        <p>This is a Private page</a></p>
</main>

</body>

</html>