<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 15:59
 */
namespace IMooc\Database;
class Mysqli implements IDatabase{
    protected $conn;
    function connect($host,$user,$pwd,$dbname){
        $this->conn=mysqli_connect($host,$user,$pwd,$dbname);
    }
    function query($sql){
        return mysqli_query($this->conn,$sql);
    }
    function close(){
        mysqli_close($this->conn);
    }
}
