<?php

    class TestCase
    {
        public $primaryColor = "black";
        public function primaryFunction($arg)
        {
            echo $arg;
        }

    }

?>

<?php
$drive = new TestCase();
$driveResult =  $drive->primaryFunction("red");
echo $driveResult;
?>

<?php

class House
{
    public $name = "mine";
    public $color = "white";
    public function setData($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function printData(){
        echo "The color of {$this->name} is {$this->color}";
    }
}

$blackHouse = new House;
$colorSet = $blackHouse->setData("tur","black");
echo $colorSet;

$blackHouse->printData();


?>