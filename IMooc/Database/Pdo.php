<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 16:05
 */
namespace IMooc\Database;
class Pdo implements IDatabase{
    protected $conn;
    function connect($host,$user,$pwd,$dbname){
        $this->conn=new \pdo("mysql:host=$host;dbname=$dbname", $user, $pwd);
    }
    function query($sql){
        return $this->conn->query($sql);
    }
    function close(){
        unset($this->conn);
    }
}