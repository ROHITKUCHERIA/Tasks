<?php

    $input = 'RohitKucheria ';
    $length = strlen($input);

    for ($i = 0; $i < $length; ++$i) {
        $freq[$i] = 1;
        for ($j = $i + 1; $j < $length; ++$j) {
            if ($input[$i] == $input[$j]) {
                ++$freq[$i];

                $input[$j] = '0';
            }
        }
    }

    //Display the each character and frequency

    for ($i = 0; $i < $length; ++$i) {
        if ($input[$i] != ' ' && $input[$i] != '0') {
            echo " $input[$i]".' - '."$freq[$i]"."\n";
        }
    }
