<?php 

session_start();
//$_SESSION ['bob'] = 'hello';

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
        <p>Anyone can see this page</p>
        <?php ?>
        <p>Go to the <a href="session_private.php">Private page</a></p>
    </main>

</body>

</html>