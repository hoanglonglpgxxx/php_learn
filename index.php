<?php
// $name = 'long';
// echo 'hi',' ','my 123name\'s '. $name;
// echo '<br>hi',' '," my name's {$name}";
// print ('hi');

//constants
//php execute TOP TO BOTTOM
// define('STATUS_PAID','paid');
// const STATUS_PAID = 'paid';
// echo defined('STATUS_PAID');

// $paid = 'PAID';
// define('STATUS_'. $paid, $paid);
// echo STATUS_PAID;

//? VARIABLE VARIABLES
/* $foo = 'bar';
$$foo = 'baz'; // aka $bar = 'baz'
echo $foo.'</br>',$bar.'</br>',$$foo.'</br>'; */
//? DATA TYPES
/**
 * 1. Scalar Types
 * bool, int, float, string
 * 
 * 2. Compound Types
 * array,obj,callable,iterable
 * 
 * 3. Cpecial  Types
 * resouce, null
 */
// ? Array
//nếu khai báo cả type ở function, params truyền vào dù khác type
// cũng bị ép kiểu(strict type)
// nếu redeclare trong func thì lấy type được truyền trong đó

/* $comp = [1,2,3,'4','A'];
print_r($comp);

function sum(int $x,int $y) {
    return $x + $y;
}
echo sum(2,3);
 */

//? Ép kiểu
/* $x = (int) '5';
 $x = (float) '5'
var_dump($x); */

//? Boolean
//int: 0, -0 = false
//float: 0.0 -0.0 = false
// '' = false
//'0' = false
//[] = false

//? Float
//floor(number): tròn xuống (ex: floor(7.9999) = 7)
//ceil(number): tròn lên (ex: floor(3.00003) = 4)
// không nên compare directly 2 float

//? String
//access index of string: $var_name[_index]

//? Array
/* $firstArr = ['name1','name2','name3'];
print_r($firstArr[1].'<br/>'); // sai index -> bị error
check xem có index không
var_dump(isset($firstArr[3]));
echo '<pre>'.var_dump($firstArr).'<br/>'.count($firstArr).'</pre>';
Push element in end of array
$firstArr[] = 'test'; */
//c2: array_push($firstArr,'val1','val2');
//! Associated Array: array that have keys
/* $firstArr = [
    'key1' => '2.4',
    'key2' => '12'
];
Access by key
$firstArr['key1'];
Define value with custom key
$firstArr['key3'] = '123'; */

// ! Multidimension Array
$firstArr = [
    'key1' => '2.4',
    'key2' => '12',
    'php' => [
        'versions' => [
            ['version' => 8, 'ref' => 'November'],
            ['version' => 16, 'ref' => 'November'],
        ],
    ],
    'python' => [
        'versions' => [
            ['version' => 8, 'ref' => 'November'],
            ['version' => 16, 'ref' => 'November'],
        ],
    ],
];
echo '<pre>';
print_r($firstArr);
echo '</pre>';

echo $firstArr['php']['versions'][0]['ref'];