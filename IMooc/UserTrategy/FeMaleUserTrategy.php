<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 17:04
 */

namespace IMooc\UserTrategy;


class FeMaleUserTrategy implements IUserTrategy
{
    function showAd(){
        return "打火机";
    }
    function showCate(){
        return "男装";
    }

}