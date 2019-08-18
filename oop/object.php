<?php
include_once ('index.php');

$myHouse = new House;

echo $myHouse -> primaryColor;

$myHouse -> primaryColor = 'red';

echo '<br>';

echo '<hr>';

echo $myHouse -> primaryColor;

function greet(){
    $hour = date('G'); //get date in 24 hr format

    if ($hour < 12){
        echo 'Morning';

    } else if ($hour < 17){
        echo 'Afternoon';
    }
    else {
        'Good Night';
    }
}

echo '<br>';
greet();

function changeName ($name){
    $name .= ' Trying';
    echo '<br>';
    echo 'inside:'. $name .'<br>';
}

$outsideVar =  'Aj is';

changeName($outsideVar);

echo 'outsideVar is '.$outsideVar;

$data = [
	'Game of Thrones' => ['Jaime Lannister', 'Catelyn Stark', 'Cersei Lannister'],
    'Black Mirror' => ['Nanette Cole', 'Selma Telse', 'Karin Parke']
];

foreach($data as $series => $actors){
    echo '<br>';
    echo "Series is $series";
    echo "<br>";
    echo "and actors are";
    foreach ($actors as $actors) {
        echo '<br>';
        echo "$actors";
    }
}
echo '<br>';
echo '<hr>';
echo '<br>';

$newHouse = new NewHouse;

$oldHouse = new NewHouse;

$newHouse->changeData('newone','white');

$oldHouse->changeData('oldhouse','black');

echo '<br>';

echo '<br>';

 $newHouse -> outputData();
echo '<br>';
 $oldHouse -> outputData();
?>

