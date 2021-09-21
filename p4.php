<?php

    for ($i = 0; $i < $n - 1; ++$i) {
        for ($j = $i + 1; $j < $n; ++$j) {
            if ($arr[$i] + $arr[$j] == $target) {
                echo 'Pair found'.' - '.'('."$arr[$i]".','."$arr[$j]".')'."\n";
            }
        }
    }

    printf('Pair not found');
