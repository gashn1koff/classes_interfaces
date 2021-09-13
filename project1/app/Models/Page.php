<?php


namespace App\Models;


use App\Core\Model;

class Page extends Model
{
    public $content;
    public $name;


    protected static $tablename = 'pages';

    public function getIntroText()
    {
        return mb_substr($this->content, 0, 50).'...';
    }

}