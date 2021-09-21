<?php

// $eArray = [];
// $eArray = array();
// $eArray = (array) null;

$firstempty = [];
echo 'Created First empty array <br>';

/* method of creating the Second Empty array. */
$second = [];
echo 'Created second empty array<br>';

/* the First method of creating an array. */
$first = [1, 2];

foreach ($first as $value) {
    echo "Value is $value <br>";
}

/* The Second method of creating an array. */
$first[0] = 'one';
$first[1] = 'two';

foreach ($first as $value) {
    echo "Value is $value <br>";
}

//************** Second Method ****************************************/

$emptyArray = [];

array_push($emptyArray, 'array', 'test', 'check');
print_r($emptyArray);

//******************* Using array_Unshift method *********************/

$ar = ['Rajesh', 'Rohit', 'Ashok', 'Brother', 'Manish'];
// use array_unshift to add 2 elements to beginning of $ar
$num = array_unshift($ar, 'Sister', 'Muskan');
echo $num;
print_r($ar);

//***************************** Using Cart Method *********************/
//doubt

$cart = [];
$cart[] = 13;
$cart[] = 14;
for ($i = 0; $i <= 5; ++$i) {
    $cart[] = $i;
}
print_r($cart);
echo '<br>';
