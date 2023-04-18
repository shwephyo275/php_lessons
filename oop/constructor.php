<?php
    class Animals
    {
        public $name;
        public $color;

        public function __construct($animalName = "default", $animalColor = "default")
        {
            // $this->name = "Aung Net";
            // $this->color = "Black";
            $this->name = $animalName;
            $this->color = $animalColor;
        }
    }

    // $dog = new Animals();
    // echo $dog->name;

    $animal = new Animals('Shwe War', 'Yellow');
    echo $animal->name;

?>