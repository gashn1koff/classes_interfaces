<?php


namespace App\classes;
use Etc\interfaces\Logger;

class FileLogger implements Logger
{
    public function writeToLog()
    {
        echo "<br>";
        echo 'Your file is WRITE successful(FileLogger)';
        echo "</br>";
    }

    public function readFromLog()
    {
        echo "<br>";
        echo 'Your file is READ successful(FileLogger)';
        echo "</br>";
    }

}