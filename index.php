<?php
require 'helpers.php';
// require './Basic/const,variable.php';
// require './Basic/array.php';
// require './Basic/array_built_in_func.php';
// require './Basic/function.php';
// require './Basic/filesystem.php';
// require './Basic/OOP.php';


// require './Demo1/demo1.php';
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
$requiredFiles = get_included_files();

//? Indclude files
// include : k có file thì warning, code vẫn chạy
// require: k có file thì warning, k chạy code dưới
//include_once, require_once: như 2 trên, nhưng chỉ include file 1 lần

//Demo 1
/* function runDemo1(){
    global $root;
    define ('FILES_PATH', $root . 'php_learn/Demo1/transaction_files' . DIRECTORY_SEPARATOR);
    define ('VIEWS_PATH', $root . 'php_learn/Demo1/views' . DIRECTORY_SEPARATOR);

    $files = getTransactionFiles(FILES_PATH);
    $transactions= [];
    foreach($files as $file){
        $transactions = array_merge($transactions,getTransactions($file, 'extractTransaction'));
    }
    $totals = calcTotal($transactions);
    //lấy tất cả file trong path gán vào $files
    //loop qua tất cả value của $files và đọc, mỗi lần đọc sẽ ghi vào 1 array
    //merge tất cả value có được 
    // printArr($transactions);

    require VIEWS_PATH . 'transactions.php';
} */
// containsFile('demo1.php', 'runDemo1');