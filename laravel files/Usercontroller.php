<?php

namespace App\Http\Controllers;

class Usercontroller extends Controller
{
    public function Array()
    {
        $colors = ['red', 'green', 'blue', 'yellow', 'orange', 'f1'];
        foreach ($colors as $value) {
            echo "$value <br>";
        }
    }

    public function is_array()
    {
        $a = 'Hello';
        echo 'a is '.is_array($a).'<br>';
        $b = ['rohit', 'red', 'train'];
        echo 'b is '.is_array($b).'<br>';
        $c = ['dost' => '35', 'friend' => '37', 'mitr' => '43'];
        echo 'c is '.is_array($c).'<br>';
        $d = 'by, hy, hello';
        echo 'd is '.is_array($d).'<br>';
    }

    public function in_array()
    {
        $people = ['Rohit', 'Manish', 'Rajesh', 'Ashok'];
        if (in_array('Glenn', $people)) {
            echo 'Match found';
        } else {
            echo 'Match not found';
        }
    }

    public function array_search()
    {
        $a = ['a' => '5', 'b' => 5, 'c' => '5'];
        echo array_search(5, $a, true);

        $a = ['a' => 'rohit', 'b' => 'Manish', 'c' => 'Ashok'];
        echo array_search('Ashok', $a);
    }

    public function array_push()
    {
        $people = ['Rohit', 'Manish', 'Rajesh', 'Ashok'];
        array_push($people, 'kucheria', 'Nokhwal', 'rajkumar');
        print_r($people);
    }

    public function array_pop()
    {
        $people = ['Rohit', 'Manish', 'Rajesh', 'Ashok'];
        array_pop($people);
        print_r($people);
    }

    public function array_unique()
    {
        $old_array = ['Mango', 'Banana', 'Orange', 'Banana'];

        $new_array = array_unique($old_array);
    }

    public function array_slice()
    {
        $input = ['a', 'b', 'c', 'd', 'e'];

        $output = array_slice($input, 2);      // returns "c", "d", and "e"
        $output = array_slice($input, -2, 1);  // returns "d"
        $output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

        // the differences in the array keys
        print_r(array_slice($input, 2, -1));
        print_r(array_slice($input, 2, -1, true));
        echo '<br>';
        // array_slice() and array with mixed keys
        $ar = ['a' => 'apple', 'b' => 'banana', '42' => 'pear', 'd' => 'orange'];
        print_r(array_slice($ar, 0, 3));
        print_r(array_slice($ar, 0, 3, true));
    }

    public function array_diff()
    {
        $array1 = ['a', 'b', 'c', 'd', 'e', 'f'];
        $array2 = ['a', 'b', 'g', 'h'];
        $array3 = ['a', 'f', 'i'];
        print_r(array_diff($array1, $array2, $array3));
    }

    public function array_sum()
    {
        $a = [2, 4, 6, 8];
        echo 'sum(a) = '.array_sum($a)."\n";
    }

    public function array_combine()
    {
        // $a = ['green', 'red', 'yellow'];
        $ar = ['a' => 'apple', 'b' => 'banana', '42' => 'pear'];
        $b = ['avocado', 'apple', 'banana'];
        $c = array_combine($ar, $b);

        print_r($c);
    }

    public function array_marge()
    {
        $array1 = ['color' => 'red', 2, 4];
        $array2 = ['a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4];
        $result = array_merge($array1, $array2);
        print_r($result);
        // $array1 = array();
        // $array2 = array(1 => "data");
        // $result = array_merge($array1, $array2);
    }

    public function array_key_exist()
    {
        $e = [1, 4, 'rohit', 'hello'];
        if (array_key_exists(5, $e)) {
            echo "The 'first' element is in the array";
        } else {
            echo 'does not exist';
        }
    }

    public function array_coloum()
    {
        $records = [
            [
                'id' => 142,
                'first_name' => 'Hello',
                'last_name' => 'hy',
            ],
            [
                'id' => 26226,
                'first_name' => 'Rajesh',
                'last_name' => 'nokhwal',
            ],
            [
                'id' => 'rj-13',
                'first_name' => 'Ashok',
                'last_name' => 'arts',
            ],
            [
                'id' => 123,
                'first_name' => 'Rohit',
                'last_name' => 'Kucheria',
            ],
        ];

        $first_names = array_column($records, 'first_name');
        print_r($first_names);
    }
}
