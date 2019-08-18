<!-- <?php include 'querystring.php';
?> -->
<?php
if($_REQUEST['name']=='Adnan'){
    echo 'form is get and name is '.$_SESSION['nameget'].'<br>';
    print_r($_GET);
    echo 'livng in auiburn';
}

?>