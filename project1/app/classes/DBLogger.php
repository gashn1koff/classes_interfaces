<?php


namespace App\classes;

use Etc\interfaces\Logger;

class DBLogger implements Logger
{
    CONST secret = 'This is secret value';

    public function writeToLog()
    {
        echo "<br>";
        echo 'Your file is WRITE successful(DBLogger)';
        echo "</br>";
    }

    public function readFromLog()
    {
        echo "<br>";
        echo 'Your file is READ successful(DBLogger)';
        echo "</br>";
    }

    public function ShowValue()
    {
        echo "<br>";
        echo self::secret;
        echo "</br>";

    }
}