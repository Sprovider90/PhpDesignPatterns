<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 15:09
 */
namespace IMooc;
class Factory{
    static function createDatabase(){
        $db= Database::getInstance();
        Register::set("db",$db);
        return $db;
    }
}