//Useful built in Array Func
// $items = ['a'=>1, 'b'=>1, 'c'=>1, 'd'=>4,'e'=>5];
// $items2 = ['a', 'b', 'c', 'd','e','f','g'];
// $items3 = [1, 1, 1, 4,5,20,50];
// $items4 = [0, 2, 3, 2,1,2,5];
//1. array_chunk: chia array thành các array nhỏ với n item
//param cuối là optional, true/false: preserveKeys
// printArr(array_chunk($items,2,true));

//2. array_combine:trả array với key từ param1, val từ param2
//khác size là err
// printArr(array_combine($items3,$items2));

//3.array filter: filter array = callback, trả về array
//k có callback thì trả về array gốc(trừ các value false)
// $even = array_filter($items3, fn($number,$key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH );
//có thể reindex array trả về: $even = array_values($even)
// printArr($even);

//4. array_keys: return keys of array;
//array_keys($array_var, $search_value)
// $keys = array_keys($items);
// printArr($keys);
// $keys = array_keys($items,1);
// printArr($keys);

//5. array_map: dùng 2 array thì biến key thành numeric
//1 array thì vẫn giữ key
// length khác nhau thì index không có value gán = 0
// $arrs = array_map(fn($number) => $number*3, $items3);
// printArr($arrs);
// $arrs = array_map(fn($number, $number2) => $number*$number2, $items3,$items4);
// printArr($arrs);

///6. array_merge: nếu chung length; reindex thành numeric
//nếu có chung key sẽ overwrite

//7. array_reduce: 
// $invoiceItems = [
//     ['price' => 1,'qty' => 3, 'desc' => 'Item1'],
//     ['price' => 2,'qty' => 3, 'desc' => 'Item2'],
//     ['price' => 3,'qty' => 5, 'desc' => 'Item3'],
//     ['price' => 3,'qty' => 2, 'desc' => 'Item4'],
//     ['price' => 5,'qty' => 1, 'desc' => 'Item5'],
// ];
// $total = array_reduce($invoiceItems, 
// fn($sum, $item) => $sum + $item['qty'] * $item['price']);
// echo($total);

//8. array_search: return key of first matching string

//asort($arr_var): sort array by value
//ksort($arr_var): sort array by key
//Destructure arr to variables
// [$a,$b,$c,$d,$e,$f,$g] = $items4;
// echo $a . ',' . $b . ',' . $c . ',' . $d . ',' . $e . ',' . $f . ',' . $g . '<br/>';
