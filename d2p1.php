<?php

$input = file_get_contents('input/day-2.data');
$input = explode(",", $input);

$input[1] = 12;
$input[2] = 2;

for ($i = 0; $i < count($input); $i += 4) {
    $opcode = $input[$i];

    print "Processing $i :: $opcode :: ";

    switch ($opcode) {
        case 99:
            print "Break!\n";
            break 2;
        case 1:
            print "Addition!\n";
            $a_pos = $input[$i+1];
            $b_pos = $input[$i+2];
            $r_pos = $input[$i+3];
            $input[$r_pos] = $input[$a_pos] + $input[$b_pos];

            break;

        case 2:
            print "Multiplication!\n";
            $a_pos = $input[$i+1];
            $b_pos = $input[$i+2];
            $r_pos = $input[$i+3];
            $input[$r_pos] = $input[$a_pos] * $input[$b_pos];

            break;
    }
}

print "Value at 0 is :: $input[0]";