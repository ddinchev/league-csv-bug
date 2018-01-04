<?php

require __DIR__ . '/vendor/autoload.php';

$csv = \League\Csv\Reader::createFromPath(__DIR__ . '/test.csv', 'r');
$stmt = new \League\Csv\Statement();
$stmt->offset(2);
foreach ($stmt->process($csv) as $record) {
    print_r($record);
}

