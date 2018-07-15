<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/7
 * Time: 18:55
 */
include 'db.php';
class MyConnect{
    //连接点
    private $link;//连接点
    private $re;//结果集
    public function __construct()
    {
        $this->link=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
        if(!$this->link){
            die('连接失败：'.mysqli_connect_error());
        }
        mysqli_query($this->link, "set names utf8");
    }

    //查询语句
    public function my_query($sql){
        return $this->re = $this->link->query($sql);
    }

    //取出一条关联数组
    public function my_fetch_assoc(){
        return $this->re->fetch_assoc();
    }

    //取出一条索引数组
    public function my_fetch_row(){
        return $this->re->fetch_row();
    }

    //取出一条索引/关联数组
    public function my_fetch_array(){
        return $this->re->fetch_array();
    }

    //取出所有索引数组
    public function my_fetch_all(){
        return $this->re->fetch_all();
    }
}