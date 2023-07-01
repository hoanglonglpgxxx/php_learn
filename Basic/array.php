<?php 
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