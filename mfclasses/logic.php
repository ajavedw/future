<?php
session_start();
$_SESSION['recentlyViewed'] = array();
for($value=0; $value<10; $value++){

$code='stock'.$value;

array_push($_SESSION['recentlyViewed'],$code);


}
echo '<pre>';print_r($_SESSION);echo '</pre>';


$_SESSION['count'] = 0;
	if(isset($_SESSION['count']))
	{
		echo "Your session count: ".$_SESSION['count']."<br />";
		$_SESSION['count']++;
	}
	else
	{

		echo "Session does not exist";
	}

    include_once 'classpage.php';

$fromClass= new test;

$try = $fromClass->color;

echo $try;

// testing classes
$_SESSION['recentlyView']=array();
$checkSession = new addStock;

$chkSession = $checkSession->storeSessArray('4');
$chkSession2 = $checkSession->storeSessArray('6');
$chkSession2 = $checkSession->storeSessArray('8');
?>