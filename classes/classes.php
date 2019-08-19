<?php

class House {
    public $primaryColor = 'black';
    public $secondaryColor = [
        'bathroom' => 'white',
        'bedroom' => 'light pink',
        'kitchen' => 'light blue'
    ];
    public $name;
    public $haspool = true;
    public $extra;

    public function changeColor($primaryColor, $name)
    {
        $this -> primaryColor = $primaryColor;
        $this -> name = $name;
    }
    public function makaan()
    {
        echo "The house owner name is {$this -> name} and color is {$this -> primaryColor}";
    }

}

?>