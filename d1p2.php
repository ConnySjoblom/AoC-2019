<?php

$input = file_get_contents('input/day-1.data');
$input = explode("\n", $input);

$fuel_required = 0;
foreach ($input as $module) {
    calculate_fuel($module, $fuel_required);
}

function calculate_fuel($entity, &$fuel_required) {
    $new_fuel = (int) floor($entity / 3) - 2;

    if ($new_fuel > 5) {
        calculate_fuel($new_fuel, $fuel_required);
    }

    $fuel_required += $new_fuel;
}

print "Required fuel: $fuel_required";