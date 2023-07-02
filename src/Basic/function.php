<?php

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
//is_callable($tên_func)
//có thể access func bên ngoài bằng use
/* // ! Ex:
$x = 1;
$sum = function(...$numbers) use ($x){
    echo $x.'<br/>';// k có use ở trên là lỗi
    return array_sum($numbers);
};
echo $sum(1,2,3,4); */
//Callback func
/* $arr = [1,2,3,4];
function foo($elem) {
    return $elem * 2;
}

$arr2 = array_map('foo', $arr);
print_r($arr2); */

/**
 * Date Time
* $currentTime = time();
* echo $currentTime + 5 * 24 * 60 * 60 .'<br/>'; // 5 ngày,24h,60',60s
* echo date('Y-m-d H:i',$currentTime);
* $date = date('Y-m-d H:i',$currentTime);
* echo '<pre>';
* print_r(date_parse($date));// return array detail của date
* echo '</pre>';*/
