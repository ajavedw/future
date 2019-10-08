<?php
session_start();
include_once 'classpage.php';

//random bs
$_SESSION['recentlyViewed'] = array();
for($value=0; $value<10; $value++){

$code='stock'.$value;

array_push($_SESSION['recentlyViewed'],$code);


}


//count for page view
$_SESSION['count'] = 1;
	if(isset($_SESSION['count']))
	{
		echo "Your session count: ".$_SESSION['count']."<br />";
		$_SESSION['count']++;
	}
	else
	{

		echo "Session does not exist";
	}

//including class

$fromClass= new test;

$try = $fromClass->color;

echo $try;

//testing classes
if(!isset($_SESSION['recentlyView'])){
$_SESSION['recentlyView']=array();
}
$checkSession = new addStock;

// $chkSession = $checkSession->storeSessArray('4');
// $chkSession2 = $checkSession->storeSessArray('6');
// $chkSession2 = $checkSession->storeSessArray('8');



include 'front.php';
$chkSession = $checkSession->storeSessArray($val);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>