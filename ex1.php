<?php

    $name = "Alexx";
    if($name == "Alex"){
        echo "Right";
    }elseif($name == "Code"){
        echo "Code";
    }else{
        echo "nothing here.";
    }

    echo '<br>the end<br>';

    $car = ['BMW', 'Toyota', 'Honda'];

    for($i = 0; $i < count($car); $i ++){
        echo $car[$i]."<br>";
    }

    foreach($car as $item) {
        echo $item."<br>";
    }

    $n = 1;
    while($n <= 4){
        echo $n."<br>";
        $n++;
    }

    $n2 = 1;
    do{
        echo $n2."<br>";
        $n2++;
    }while($n2 <= 6);

    function outputMessage($x = 'empty'){
        echo "Hi there\n". $x . "<br>";
    };

    outputMessage("I'm Alex");


    function add($x, $y){
        echo $x+$y. "<br>";
    };

    add(2,5);

    //return function
    function sum($z, $t){
        return $z+$t;
    };
    $output = sum(2,6);
    echo $output;

