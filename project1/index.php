<?php
include_once __DIR__.'/vendor/autoload.php';

use App\classes\FileLogger;
$obj1 = new FileLogger();
$obj1->readFromLog();
$obj1->writeToLog();



