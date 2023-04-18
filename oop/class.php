<?php

    class Car {
        //properties
        public $name = "BMW";
        public $price = "20000$";

        //methods
        public function getCarName($userName = 'default name')  // void functino
        {
            $this->name = $userName;
            echo $this->name;
        }

        public function getCarPrice($userPrice = "0")   //Type function
        {
            $this->price = $userPrice;
            return $this->price;
        }
    }

    $result = new Car();
    // echo $result->name;
    // echo "<br>";
    // echo $result->price;
    $result->getCarName('AAA');
    echo "<br>";
   $price =  $result->getCarPrice(1000);
   echo $price;
   echo "<br>";

   class Fruit 
   {
    //properties
    private $fname = "Apple";

    //method
    public function getFruitName()
    {
       return $this->fname;
    }
   }

   $fruit = new Fruit();
   $fruitName = $fruit->getFruitName();
   echo $fruitName;

