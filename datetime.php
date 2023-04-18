<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Date & Time
    <hr>

    <?php
        date_default_timezone_set('Asia/Yangon');
        echo date('d-m-Y h:i:a');
        echo "<br>";

        $currentDate = date_create(date('d-m-Y'));
        date_add($currentDate, date_interval_create_from_date_string("10 days"));
        echo date_format($currentDate, 'd-m-Y');
        echo '<br/>';

        date_sub($currentDate, date_interval_create_from_date_string('3 days'));
        echo date_format($currentDate, 'd-m-Y');
        echo '<br/>';

        echo cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
        echo '<br/>';


    ?>
    
</body>
</html>