<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 13:46
 */
define("basedir",__DIR__."/");
require basedir."/IMooc/Autoload.php";
spl_autoload_register("\\IMooc\\Autoload::autoload");
/*
//1.自动加载
//App\Control\Home::test();
//2.链式调用
//$obj=new IMooc\Link();
//$obj->where()->order()->limit()->select();
//3.魔术方法
//$obj=new IMooc\Magic();
//$obj->test=111;
//var_dump($obj->test);
//$obj->test();
//IMooc\Magic::test();
//echo $obj;echo "\n";
//$obj(11);
//4.工厂模式
//$obj=IMooc\Factory::createDatabase();
//var_dump($obj);
//5.单例模式
//IMooc\Factory::createDatabase();
//IMooc\Factory::createDatabase();
//IMooc\Factory::createDatabase();
//IMooc\Factory::createDatabase();
//6.注册树模式
//IMooc\Factory::createDatabase();
//$db=\IMooc\Register::get("db");
//var_dump($db);

//7.适配器模式
//$db=new \IMooc\Database\Pdo();
//$db=new \IMooc\Database\Mysqli();
//$db->connect("127.0.0.1","root","123456","test");
//$rs=$db->query("show databases");
//var_dump($rs);
//$db->close();*/
//8.策略模式
//class Page{
//    /**
//     * @var \IMooc\UserTrategy\IUserTrategy
//     */
//    protected $stratege;
//    function set(\IMooc\UserTrategy\IUserTrategy $stratege){
//        $this->stratege=$stratege;
//    }
//    function show(){
//        echo $this->stratege->showAd();
//        echo "\n";
//        echo $this->stratege->showCate();
//    }
//}
//$page=new Page();
//$_GET["sex"]="female";
//if($_GET["sex"]=="male"){
//    $str=new \IMooc\UserTrategy\MaleUserTrategy();
//}else{
//    $str=new \IMooc\UserTrategy\FeMaleUserTrategy();
//}
//$page->set($str);
//$page->show();