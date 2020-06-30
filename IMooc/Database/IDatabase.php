<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 15:49
 */
namespace IMooc\Database;
interface IDatabase{
    function connect($host,$user,$pwd,$dbname);
    function query($sql);
    function close();
}