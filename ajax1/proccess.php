<?php
$conn = mysqli_connect('localhost', 'root', '','ajaxtest');

//post

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if (mysqli_query($conn, $query)) {
        echo 'user Added';
    } else {
        echo 'ERROR' . mysqli_error($conn);
    }
}
//get
if(isset($_GET['name'])){
    echo 'Get: Your name is'.$_GET['name'];
}


?>