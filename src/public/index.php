<?php
require 'helpers.php';
// require '../Basic/const,variable.php';
// require '../Basic/array.php';
// require '../Basic/array_built_in_func.php';
// require '../Basic/function.php';
// require '../Basic/filesystem.php';
// require '../Basic/OOP.php';
// require '../app/Transaction.php';
// require '../app/Customer.php';
// require '../app/PaymentProfile.php';
// require '../app/Enum/Status.php';
// require '../app/Input/Field.php';
// require '../app/Input/Boolean.php';
// require '../app/Input/Text.php';
// require '../app/Input/Radio.php';
// require '../app/Input/Checkbox.php';

require __DIR__ . '/../vendor/autoload.php';
// require './Demo1/demo1.php';
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR . '/src/public/';
$requiredFiles = get_included_files();

    //? Indclude files
    // include : k có file thì warning, code vẫn chạy
    // require: k có file thì warning, k chạy code dưới
    //include_once, require_once: như 2 trên, nhưng chỉ include file 1 lần

    //Demo 1
    /* function runDemo1(){
    global $root;
    define ('FILES_PATH', './Demo1/transaction_files' . DIRECTORY_SEPARATOR);
    define ('VIEWS_PATH', './Demo1/views' . DIRECTORY_SEPARATOR);

    $files = getTransactionFiles(FILES_PATH);
    $transactions= [];
    foreach($files as $file){
        $transactions = array_merge($transactions,getTransactions($file, 'extractTransaction'));
    }
    $totals = calcTotal($transactions);
    ->lấy tất cả file trong path gán vào $files
    ->loop qua tất cả value của $files và đọc, mỗi lần đọc sẽ ghi vào 1 array
    ->merge tất cả value có được 
     printArr($transactions);

    require VIEWS_PATH . 'transactions.php';
}
containsFile('demo1.php', 'runDemo1'); */
    //-------------------------------------
    /* $transaction = (new Transaction(100, 'Transaction1'))
    ->addTax(8)
    ->applyDiscount(15) */;
// Gán value: $transaction->amount = 50;
// var_dump($transaction->getAmount());
use App\Transactions\Transaction;

$transaction = (new Transaction(100, 'Transaction1'));
// $transaction->getCustomer() = new Customer();

//Nullsafe operator
//khi 1 step sai -> các step sau bị discard
// echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';
// echo Transaction::STATUS_PAID;
use App\Enum\Status;

// var_dump($transaction->setStatus(Status::PAID));

$fields = [
    new \App\Input\Field('baseFeild'),
    new \App\Input\Text('textFeild'),
    new \App\Input\Boolean('booleanFeild'),
    new \App\Input\Checkbox('checkboxFeild'),
    new \App\Input\Radio('radioFeild'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br/>';
}
