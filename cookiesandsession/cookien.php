<?php
    //setcookie('fontSize', 25, time() + 60 * 60, '/','localhost');
    if (isset($_POST['submit'])){
        setcookie('fontSize', $_POST['font-size'], time() + 60 * 60, '/','localhost');
        print_r($_POST);
        header('Location:cookien.php');
    }
    echo $_POST['font-size'];
    $fontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'].'px':'55px';
    ?>
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
<style>
    body {
        margin:10px;
    }
    p {
        font-size:<?= $fontSize; ?>;
    }
    </style>

    <div>
    <form action="" method="post">
    <label for="">choose font size</label><br>
        <select name="font-size" id="font-size">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
        </select>
        <br>
        <input type="submit" value="submit" name='submit'>

    </form>
    </div>
<div>
    <br>
    <hr>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus unde neque, fugit ad dolores deleniti nobis iste magnam doloremque impedit dolorum, non, ut aut? Similique culpa accusantium dolorem numquam obcaecati.
    </p>
</div>


    <!-- jQuery -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>