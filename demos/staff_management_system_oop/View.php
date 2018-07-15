<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/7
 * Time: 20:20
 */
//视图类
class View{
    protected $date = [];

    //绑定数据的方法
    public function assign($key,$val){
        $this->date[$key]=$val;
    }

    //展现数据,加载页面
    public function display($file_name){
        extract($this->date);
        include "$file_name";
    }
}