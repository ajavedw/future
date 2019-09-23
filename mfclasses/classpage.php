<?php
class addStock{

    public function storeSessArray($stk_code){

         array_push($_SESSION['recentlyView'],$stk_code);
        //$_SESSION['recentlyView'][]= $stk_code;

    }

}

class test{
    public $color='black';
    public $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
}
?>