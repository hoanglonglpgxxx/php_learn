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

date_default_timezone_set('Asia/Ho_Chi_Minh');

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

// $transaction = (new Transaction(100, 'Transaction1'));
// $transaction->getCustomer() = new Customer();

//Nullsafe operator
//khi 1 step sai -> các step sau bị discard
// echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';
// echo Transaction::STATUS_PAID;

// var_dump($transaction->setStatus(Status::PAID));

/* $fields = [
    // new \App\Input\Field('baseFeild'),
    new \App\Input\Text('textFeild'),
    // new \App\Input\Boolean('booleanFeild'),
    new \App\Input\Checkbox('checkboxFeild'),
    new \App\Input\Radio('radioFeild'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br/>';
} */

// $newInvoice = new \App\Invoice(new \App\Customer());
/* try {
    $newInvoice->process(25);
} catch (\App\Exception\Missing $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ': ' . $e->getLine() . PHP_EOL;
} catch (\InvalidArgumentException) {
    echo 'Invalid argument excetion' . PHP_EOL;
} finally {
    echo 'Finally block' . PHP_EOL;
} */

/* function process()
{
    $newInvoice = new \App\Invoice(new \App\Customer());

    try {
        $newInvoice->process(25);
        return true;
    } catch (\App\Exception\Missing $exception) {
        echo $exception->getMessage() . ' ' . $exception->getFile() . ': ' . $exception->getLine() . PHP_EOL;
        return false;
    } catch (\InvalidArgumentException) {
        echo 'Invalid argument excetion' . PHP_EOL;
        return false;
    } finally {
        echo 'Finally block' . PHP_EOL;
        return -1;
    }
}
var_dump(process());
 */

$invoiceCollection = new \App\InvoicesCollection([new \App\Invoice(15),new \App\Invoice(1552),new \App\Invoice(155),new \App\Invoice(25)]);

foreach($invoiceCollection as $invoice) {
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL . '</br>';
}

function foo(iterable $iterable) {
 foreach ( $iterable as $item) {
     echo $item->id . ' - ' . $item->amount . PHP_EOL . '</br>';

 }
}

foo($invoiceCollection);
