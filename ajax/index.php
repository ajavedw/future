<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="page.php" method="get">
    <input type="text" name="" id="textbox"><input id="button" type="button" name="search" value="Load">
    <div class="content"></div>
    </form>
    <button onclick="ajaxfunction()">ajax</button>
    <p id="new"></p>

    <button onclick="randonMessages()">object</button>
    <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
    <script src="ajax.js"></script>
</body>
</html>