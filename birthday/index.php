<?php

#Welcome to my birthday day in numbers web application in php

$year_of_birth = '1999-08-14';
$current_date = date('Y-m-d');

$year_timestamp = strtotime($year_of_birth);
$current_date_timestamp = strtotime($current_date);

$difference = $current_date_timestamp - $year_timestamp;

$day = 60 * 60 * 24;

$day_in_numbers = $difference / $day;

echo $day_in_numbers . PHP_EOL;
