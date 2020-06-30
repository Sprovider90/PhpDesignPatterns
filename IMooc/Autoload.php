<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 13:51
 */
namespace IMooc;
class Autoload{
    static function autoload($class){
        require basedir.str_replace("\\","/",$class).".php";
    }
}