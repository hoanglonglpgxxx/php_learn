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
/* $firstArr = [
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
echo $firstArr['php']['versions'][0]['ref']; */
//remove last elemnt from array: array_pop($firstArr);
//remove first elemnt from array: array_shift($firstArr);
//check if key in array: array_key_exists('key_name',$arr_name)

// ? For each, có thể bỏ key+> nếu k cần
// $arrText khi đó sẽ nhận giá trị cuối cùng, không bị hủy khi end loop
// $firstArr = ['a','b','c','d','e','f','g','h','i'];
/*  foreach ($firstArr as $key => $arrText) {
    echo $arrText .' ' . $key . '<br/>';
} 
echo $arrText; */
/* có thể dùng reference trong foreach để khi thay val của array
thì giá trị return cũng thay đổi
foreach ($firstArr as $key => &$arrText) {
    echo $arrText .' ' . $key . '<br/>';
}
$arrText = 'php';
print_r($firstArr);//value cuối cùng bị đổi thành 'php'
 */
/* $user = [
    'name' => 'A',
    'email' => '2A@gmail.com',
    'skills' => ['a','b','c']
];
foreach($user as $key => $value){
    echo $key . ': ' . json_encode($value) . '<br/>';
}
 */
//? Indclude files
// include : k có file thì warning, code vẫn chạy
// require: k có file thì warning, k chạy code dưới
//include_once, require_once: như 2 trên, nhưng chỉ include file 1 lần
// include 'a.php';

//Render layout
/* ob_start();
include './Parts/nav.php';
$nav = ob_get_clean();
$nav = str_replace('about','about us',$nav);
echo $nav; */

// ? Function
// Scope tương tự JS?
// 1. Return type
/* function foo() : int|float{// có thể return type int/float
    return .2;
};
function foo() : ?int{// có thể return type null/int
    return null;
};
$a = foo();
echo $a; */

//2. Splat operator
/* function sum($x, $y, ...$numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $x + $y + $sum;

    /or return array_sum($numbers);
}

$a = 8.5;
$b = 2.1;
echo sum($a,$b,21,212,421) . '<br/>';
/cũng có thể dùng splat(spread operation: rải) để unpack array
$numbers = [120,4,3,2];
echo sum($a, $b, ...$numbers); */

//3, Named arguments
//Ex: setcookie(name: 'test', httpOnly: true);
/* function sum2($a, $y){
    if($a % $y === 0){
        return $a / $y;
    }
    return $a;
}
/ $x = 6;
/ $y = 3;
/ echo sum2(y: $y, a: $x);// k cần truyền params đúng order nữa

$arr = [ 'y' => 2,'a' => 1,];
/ khi rải 1 array, key sẽ là tên biến
/  tên key phải tồn tại trong func
/ ex đổi key thành b thì trong func phải có gọi biến b
echo sum2(...$arr); */

//4.  Types of func
//Scope of func
// Anony func chỉ gọi được các variable trong scope
// muốn dùng var từ ở ngoài thì phải thêm use sau phần khai báo param
/* // ! Ex:
$x = 1;
$sum = function(...$numbers) use ($x){
    echo $x.'<br/>';// k có use ở trên là lỗi
    return array_sum($numbers);
};
echo $sum(1,2,3,4); */
//Callback func
$arr = [1,2,3,4];
function foo($elem) {
    return $elem * 2;
}

$arr2 = array_map('foo', $arr);
print_r($arr2);





