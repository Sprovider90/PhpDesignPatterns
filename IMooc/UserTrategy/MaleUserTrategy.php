<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 17:01
 */
namespace IMooc\UserTrategy;
class MaleUserTrategy implements IUserTrategy
{
    function showAd(){
        return "ipone6";
    }
    function showCate(){
        return "女装";
    }
}