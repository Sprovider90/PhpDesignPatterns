<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 15:27
 */
namespace IMooc;
class Register{
    protected static $arr;
    static function set($alias,$obj){
        self::$arr[$alias]=$obj;
    }
    static function get($alias){
        return self::$arr[$alias];
    }
    static function _unset($alias){
        unset(self::$arr[$alias]);
    }
}