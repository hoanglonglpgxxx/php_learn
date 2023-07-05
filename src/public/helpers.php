<?php
function printArr(array $value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function price($amount, $currency)
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . $currency . number_format(abs($amount), 2);
}

function formatDate(string $date)
{
    return date('M j, Y', strtotime($date));
}

function containsFile($fileName, $executeFunc = null)
{
    global $requiredFiles;
    foreach ($requiredFiles as $requiredFile) {
        if (false !== strpos($requiredFile, $fileName)) {
            $executeFunc();
        };
    }
}
