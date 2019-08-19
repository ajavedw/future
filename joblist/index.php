<?php

class House {
    public $primaryColor = "black";
    public $interiorColor = [
        'bathroom' => 'offwhite',
        'kitchen' => 'green',
        'bedroom' => 'white'
    ];
    public $hasPool = false;
    public $extra;
}

$myHouse  = new House();
$friendHouse = new House();

echo $myHouse -> primaryColor;

?>