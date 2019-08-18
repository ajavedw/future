<?php
session_start();
if(isset($_GET['submitget'])){
    $name = $_GET['nameget'];
    $_SESSION['nameget'] = $name;
    $gender  = $_GET['genderget'];
    $location = $_GET['locget'];
    header("location:location.php?form=get&name=".$name."&location=".$_GET['locget']);

}

if (isset($_POST['submitpost'])){
    $name = $_POST['namepost'];
    $gender  = $_POST['genderpost'];
    $location = $_POST['locpost'];
    echo 'form is post and name is '.'<br>'.$name;
    header("location:location.php?form=get&name=".$name."&location=".$_GET['locget']);
}

?>