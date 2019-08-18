<?php
class House {
    public $primaryColor = 'black';
    public $secondaryColor = [
        'bathroom' => 'white',
        'bedroom' => 'light pink',
        'kitchen' => 'light blue'
    ];
    public $hasPool = false;
    public $extra;
}

class NewHouse {
    public $houseName;
    public $primaryColor = 'black';

    function changeData($name, $color){
        $this->houseName =$name;
        $this->primaryColor =$color;
    }

    function outputData(){
        echo "The house name is {$this->houseName} and primary color is {$this->primaryColor}";
    }

}
?>
<?php

$arr = array ( [question] => COSnet is user friendly [answer_category] => S [sequence] => 1 [question_id] => 1 );


?>