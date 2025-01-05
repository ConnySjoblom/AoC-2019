<?php

$input = file_get_contents('input/day-1.data');
$input = explode("\n", $input);

$fuel_required = 0;
foreach ($input as $module) {
    $fuel_required += (int) floor($module / 3) - 2;
}

var_dump($fuel_required);