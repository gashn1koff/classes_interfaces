<?php


namespace App\classes;
use Etc\interfaces\Logger;

class FileLogger implements Logger
{
    public function writeToLog()
    {
        echo 'Your file is WRITE successful';
    }

    public function readFromLog()
    {
        echo 'Your file is READ successful';
    }

}