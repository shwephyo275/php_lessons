<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // mysqli_connect('hostname','userName','password','databaseName');
       $connection = mysqli_connect('localhost','root','','test');

       if($connection){
        echo "Connected success!";
       }else{
         die("Connection fail.." . mysqli_error());
       }

    ?>
</body>
</html>