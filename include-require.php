<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Include | Require
    <hr>


    <?php
        require("./datetime.php"); // can call several time // can't run when error happen
        include("./strings.php"); // can call several time // the best, can run even error happen
        include_once("./ex1.php"); // can call one time
        require_once("./math.php"); // can call one time


    ?>
</body>
</html>