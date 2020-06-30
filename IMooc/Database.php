<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 14:23
 */
namespace IMooc;
class Database{
    protected static $db;
    private function __construct(){
        echo __CLASS__;
    }
    static function getInstance(){
        if(!self::$db){
            self::$db=new self();
        }
        return self::$db;
    }
    function where(){
        return $this;
    }
    function order(){
        return $this;
    }
    function limit(){
        return $this;
    }
    function select(){
        return $this;
    }
}