<?php


namespace App\Core;


class Model
{
    protected static $tablename;

    public static function findById($id)
    {
        $sql = "SELECT * FROM ".(static::$tablename)." WHERE id = ".$id;
        $db = DB::getConnection()->query($sql);
        $res = mysqli_fetch_assoc($db);
        return $res;

    }

    public static function search($searchArgs, $offset=0, $limit=100)
    {

    }

}