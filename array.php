<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Array Build in Function
    <hr>

    <?php
        $arr = ['apple', 'mango', 'orange', 10,20];
        echo count($arr);    //array of lenght
        echo '<br/>';
        echo current($arr);   //the first one
        echo '<br/>';
        echo end($arr);      // the last 
        echo '<br/>';
        echo $arr[array_rand($arr)];  //get random index number 
        echo array_sum($arr);
        echo '<br/>';

        $number = range(0,10);
        echo '<pre/>';
        var_dump($number);

    ?>
</body>
</html>