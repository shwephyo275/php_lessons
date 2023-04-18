<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in String Method we must know</title>
</head>
<body>
    strlen() <br>
    str_word_count() <br>

    strrev()<br>

    str_shuffle()<br>

    strpos(str,search)<br>

    substr(str , start , end)<br>

    strtoupper()<br>

    strtolower()<br>

    ucfirst()<br>    //only the first word is uppercase

    ucwords()<br>    //every the first word is uppercase

    strip_tags()<br>  //remove htmls codes

    str_replace(find,new,string)<br>

    trim()<br>

    str_split()<br>  // string to array

    explode()<br>


    <h1 style="color:aqua;"><i>This is testing paragraph</i></h1>

    <hr>


    <?php
    $name = "Alex code lab";
    echo $name."<br>";
    // echo strlen($name);
    // echo str_word_count($name);
    // echo strrev($name);
    // echo str_shuffle($name);
    echo strpos($name, 'lab'). '<br>';  // array format 0 ->
    var_dump(strpos($name, 'nay'));
    echo "<br>";
    echo $name[10];

    echo substr($name, 0,5);  //

    echo strtoupper($name);
    echo strtolower($name);
    echo ucfirst($name);
    echo ucwords($name);
    echo "<br>";

    $test = "<h1><i>This is testing paragraph</i></h1>";
    echo strip_tags($test);
    echo "<br>";

    echo str_replace("code", "Programming",$name);
    echo "<br>";

    $n = "       hi every      one      ";
    var_dump(trim($n));  // delete space => left | right
    echo "<br>";

    var_dump(ltrim($n));  // delete space => left
    echo "<br>";

    var_dump(rtrim($n));  // delete space => right
    echo "<br>";

    $na = "aaaahi everyaaaa  oneaaaa";
    var_dump(trim($na, 'aaaa'));  // delete text => left | right
    echo "<br>";
    
    $ne = "hi hello"; // String -> Array
    echo "<pre>";
    var_dump(str_split($ne));
    $arr = str_split($ne);
    echo $arr[4];
    var_dump(str_split($ne, 3));

    $ne = "hi/hello/how/yay"; // String -> Array

    var_dump(explode("/", $ne));
    var_dump(explode("/", $ne, 3)); //can add limitation , total array is 3




    ?>
    
    
</body>
</html> 