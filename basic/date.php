<?php

//print current date

echo 'la fecha de hoy ' . date('Y-m-d H:i:s');
echo "<br>";
//print current yesterday date

echo 'la fecha de ayer ' . date('Y-m-d H:i:s' , time() - 60 * 60 * 24);
echo "<br>";

//different format :::
    echo date('F j Y, H:i:s');
    echo "<br>";

    ///print current timestamp
    echo time();

    //parse date
    $parsedate= date_parse('2020-10-12  09:00:00');
    echo "<pre>";
    var_dump($parsedate);
    echo "</pre>";

    //parse date in diferent format

    $datestring = 'February 4 2020 12:45:35';
    $dateparses = date_parse_from_format('F j Y H:i:s' ,$datestring);
    echo "<pre>";
    var_dump($dateparses);
    echo "</pre>";