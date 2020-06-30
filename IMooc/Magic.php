<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 14:48
 */
namespace IMooc;
class Magic{
    protected $arr=[];

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->arr[$name]=$value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->arr[$name];
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump(func_get_args());
    }
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump(func_get_args());
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        var_dump(func_get_args());
    }
}