<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-06-30
 * Time: 18:01
 */

namespace IMooc;


use IMooc\Database\Mysqli;

class User
{
    public $id;
    public $mark;
    protected $db;
    public function __construct($id)
    {
        $this->db=new Mysqli();
        $this->db->connect("127.0.0.1","root","123456","test");
        $rs=$this->db->query("select * from test where id=".$id);
        $rs=$rs->fetch_assoc();
        $this->id=$rs["id"];
        $this->mark=$rs["mark"];
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $sql="update test set mark={$this->mark} where id={$this->id}";
        $this->db->query($sql);
    }
}