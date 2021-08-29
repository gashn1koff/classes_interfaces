<?php
include_once __DIR__.'/vendor/autoload.php';

use App\classes\FileLogger;
use App\classes\DBLogger;


$obj1 = new FileLogger();
$obj1->readFromLog();
$obj1->writeToLog();

$obj2 = new DBLogger();
$obj2->readFromLog();
$obj2->writeToLog();
$obj2->ShowValue();


