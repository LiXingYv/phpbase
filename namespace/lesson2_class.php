<?php
/**
 * 命名空间解决了类的全局命名冲突问题
 */
namespace a{
    class A{
        public $name = 'peter zhua';
        public function say(){
            $namespace = '命名空间：'.__NAMESPACE__;
            $claaName = '类名：'.__CLASS__;
            $methodName = '方法名：'.__FUNCTION__;
            return $namespace.'<br/>'.$claaName.'<br/>'.$methodName."<br/>".$this->name;
        }
    }
}

namespace b{
    class A{
        public $name = 'peter zhu';
        public function say(){
            $namespace = '命名空间：'.__NAMESPACE__;
            $claaName = '类名：'.__CLASS__;
            $methodName = '方法名：'.__METHOD__;
            $temp = (new \a\A)->name;
            return $namespace.'<br/>'.$claaName.'<br/>'.$methodName."<br/>".$this->name."<br/>".$temp;
        }
    }
}

namespace{
    header("Content-type:text/html;charset=utf-8");//指定编码
    echo (new a\A)->say();
    echo '<hr/>';
    echo (new b\A)->say();
}
