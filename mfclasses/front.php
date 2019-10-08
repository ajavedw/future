
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php

$val='7';



    // original string
    $OriginalString = "Hello, How can we help you?";
    $new = explode(" ", $OriginalString);
    echo '<pre>';print_r($new);echo '</pre>';
    if(($key = array_search('How', $new)) !== false){
         unset($new[$key]);
         echo '<pre>';print_r($key);echo '</pre>';
         echo '<pre>';print_r(array_search('can', $new));echo '</pre>';
    }
    echo '<pre>';print_r($new);echo '</pre>';

    // Without optional parameter NoOfElements
    echo '<pre>';print_r(explode(" ",$OriginalString));echo '</pre>';
    // with positive NoOfElements
    echo '<pre>';print_r(explode(" ",$OriginalString,3));echo '</pre>';
    // with negative NoOfElements
    echo '<pre>';print_r(explode(" ",$OriginalString,-2));echo '</pre>';





?>


    <!-- jQuery -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
