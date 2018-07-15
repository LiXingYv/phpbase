<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/5
 * Time: 21:25
 */
header("Content-type:text/html;charset=utf-8");//指定编码
//新建类
//const用于类成员变量的定义，一经定义，不可修改
//Const可在类中使用，define不能
//const不能在条件语句中定义常量
//const定义常量是大小写敏感，而define可以通过第三个参数（true表示大小写不敏感）来指定大小写是否敏感
class Person{
    const Name='小华';
    public $name='小明';//属性
    public $name1='小红';//属性

    public function  run($my_name){//方法
        echo $my_name.'跑步';
    }
}

//实例化
$p= new Person();

//对象调用属性以及方法 使用->
//对象调用属性的时候，直接调用属性名，不要加$
//对象调用方法的时候，直接写方法名即可
echo $p->name;

echo $p->name1;

echo '<hr/>';
$p->run('小王');
echo '<hr/>';
//调用类常量，可以用当前对像加：：的形式来调用
echo $p::Name;
//调用类常量，可以用类名加：：的形式来调用
echo '<hr/>';
echo Person::Name;

//构造函数

class MyPc{//构造函数写法1
    function __construct($name)
    {
        //初始化操作
        echo '你好，'.$name;
    }
}
class MyPc1{//构造函数写法2
    function MyPc1(){
        //初始化操作
    }
}
echo '<hr/>';
new MyPc('小青');

//析构函数__destruct(),能够在对象释放时自动被调用的方法被称为析构函数，我们可以理解为垃圾回收机制，当对象内部的操作执行完毕的时候，__destruct()被调用，然后对象所使用的内存被释放出来。
class MyPc2{


    function __destruct(){

    }
}

//$this关键字是用来访问当前对象中的对象属性和方法的系统变量
//$this仅能在当前对象中使用

class Pc{
    public $name='小明1';
    function composer($c=''){
        echo $this->name;
    }
}
//类不被实例化是不会展示类里面的所有功能；
$p1 = new Pc();
$p1->composer();

//访问控制符public，protected,private
//public表示全局，类内部外部子类都可以访问
//protected表示受保护的，只有本类或子类或父类中可以访问
//private表示私有，只有本类内部可以使用
class Pc1{
    //公共的 对外可访问
    public $name='小明明';
    //受保护的可继承的
    protected $age='18';

    private $city='上海';
    //方法最好有返回值
    public function test(){
       return $this->name.'在'.$this->city;
    }
}
//类的外面想调用属性，要先实例化

$p3 = new Pc1();
//protected和private访问控制符不能用对象的形式访问
//echo $p3->age;
echo $p3->test();

//__autoload()快速取得对象名称并自动载入进当前页面
function __autoload($class_n){//该方法是在类以外单独的方法，也就是我们所谓的构造函数
    include($class_n.'.php');//将会自动调用，执行include("mypcc.php");include("Demoo.php");
}
$pp=new MyPcc();
$dd=new Demoo();

//类的继承
//PHP类的继承，我们可以理解成共享被继承类的内容。PHP中使用extend是单一继承的方法，请切忌！（非C++多继承）被继承的类我们叫做父类（基类）继承者称为子类（派生类）
class A{
    public $name='张氏';
    function test(){//默认的访问控制符是public
        echo '我是父类的'.$this->name;
    }
    const Age=18;
    //public static $sex='man';错误
    static $sex='man';
    public static function test1(){
        echo "静态方法";
    }
}
//静态方法无需实例化即可使用
//子类会把父类的属性和方法也给继承过来
class B extends A{
    public function test(){
        echo '<hr/>';
        echo '我是子类的'.$this->name;
    }
    public function  aa(){
        echo '<hr/>';
        parent::test();
    }
}
$b = new B;
$b->test();
//parent 子类继承父类。子类想访问跟子类方法同名的父类方法的时候，并且不想被子类的方法重载，使用parent
$b->aa();
//基类方法重载。因为属于向下继承的原理，基类不能使用派生类里内容，这个使基类的一些方法不能完成我们的一些派生类的功能
//方法重载我们可以理解为方法覆盖，在派生类里使用与基类方法重名的方法名称执行重载，重载时我们需要调用原始基类内容再增加新内容，我们可以使用，基类名：：方法名
//范围操作符 :: 这个符号用于在类中（而不是对象中）访问成员，在使用类的时候，父类和子类具有相同的属性和方法时，利用它可以避免混淆。
//在类外的时候，没有创建对象的情况下使用该操作符访问类的成员。加::来调用一些静态的属性和方法，普通方法不可如此调用,静态属性需要加$，常量名前没有$
echo '<hr/>调取类常量:';
echo A::Age;//调取类常量
echo '<hr/>调取类静态方法:';
A::test1();//
echo '<hr/>调取类静态属性:';
echo A::$sex;//
//当要引用父类的一个成员，可以使用关键字parent和范围解析操作符来引用。
//在多数情况下，我们使用范围解析操作符是为了访问被重写的方法。我们可以用其访问静态和常数成员。

//只要在成员前加上关键字static，该变量就成为静态成员了。
//类的静态成员：静态变量属于类，而不属于类的某个实例。这个变量对所有实例都有效。
//声明为static的类、函数和变量将不能引用实例方法或变量。静态变量和方法必须通过类名进行引用而不能通过实例对象引用

//PHP7支持通过new class来实例化一个匿名类，这可以用来替代一些“用后即焚”的完整类定义

//traits是一种为类似PHP的单继承语言而准备的代码复用机制。Trait为了减少单继承语言的限制，使开发人员能够自由的在不同层次结构内独立的类中复用方法集
//trait类是不需要继承的
trait Phone{
    function usb(){
        echo 'usb';
    }

    function key(){
        echo 'key';
    }
}
class Apple{
    use Phone;
}
$apple = new Apple();
echo '<hr/>';
$apple->key();
//可以看到，我们在没有增加代码复杂的情况下，实现了代码的复用

//抽象就是无法确切的说明，但又有一定的概念或者名称，在PHP中声明一个抽象类或者方法我们需要使用abstract关键字，一个类中至少有一个方法时抽象的，我们称之为抽象类。所以如果定义抽象类首先一定抽象方法。抽象方法没有方法体。
//抽象类中至少有一个抽象方法；抽象方法不允许有{}；抽象方法前面必须要加abstract。
//抽象类不能被实例化，只能被继承；继承的派生类当中要把所有的抽象方法重载才能实例化
abstract class Cl1{
    //普通方法
    function test(){}
    //抽象方法
    abstract function usb();
}
class Cl2 extends Cl1{
    function usb(){
        echo '子类继承抽象类';
    }
}
$cl2 = new Cl2;
echo '<hr/>';
$cl2->usb();

//interface接口：一种成员属性全部为抽象的特殊抽象类，在程序中同为规范的作用
//类中全部为抽象方法；抽象方法前不用加abstract;接口抽象方法属性为public；成员属性必须为常量；本身不能被实例化，必须被继承或者引用；继承或者引用后，需要把所有抽象方法重载方可使用。
//接口的引用：接口引用区别与之前我们学的类的继承关键字extends，继承只能是单一性的，而接口可以使用关键字implements多个引用并用逗号分开
//普通类和抽象类都可以引用接口
interface Price{
    //所有的方法都是抽象方法
    public function key();

    public function usb($name);
}
interface Num{
    public function age();
    public function name($a,$b);
}
//接口只允许被实现和引用
class Price1 implements Price,Num{
    function __construct()
    {
        echo "<hr/>";
    }

    function key(){
        echo '接口引用key';
    }
    function usb($name)
    {
        // TODO: Implement usb() method.
        echo '接口引用实现'.$name;
    }
    function age()
    {
        // TODO: Implement age() method.
    }
    function name($a, $b)
    {
        // TODO: Implement name() method.
    }
}
$price1 = new Price1();
$price1->usb('aa');

//self 用来访问当前类中的内容的关键字，类似于$this关键字，但$this是需要类实例化以后才可以使用的，self可以直接访问当前类中的内部成员，因为没有实例化类访问内部属性或者方法是没有意义的，所以self一般用来访问类中的静态成员，常量，或者其他定义内容

//final 用来定义类和方法的一个重要关键字，当定义类的时候该类将不能被继承，当用来定义方法的时候方法将不能被重载
final class class1{
    final function fun1(){}
    public $name = '小明';
}
//class class2 extends class1{}


//对象复制与克隆 有时候我们需要在一个项目里面使用两个或多个一样的对象，如果使用new关键字重新创建对象，再赋值上相同的属性，这样做比较烦琐而且也容易出错。PHP提供了对象克隆功能，可以根据一个对象完全克隆出一个一模一样的对象，而且克隆以后，两个对象互不干扰。
$apple1= clone $apple;
//__clone()
//如果想在克隆后改变原对象的内容，需要在类中添加一个特殊的__clone()方法来重写原本的属性和方法。__clone()方法只会在被克隆的时候自动调用


//__get(string $name)
//在读取不可访问的属性的值时该函数会被调用。$name是属性名
class Demo{
    private $age = 18;
    public $name;
    //访问不存在的或者权限不够的时候
    function __get($name){
        if($this->name == 'admin'){
            return $this->$name;
        }else{
            return '数据出错';
        }
        return $this->$name;
    }
}
$demo = new Demo();
$demo->name = 'admin';
echo '<hr/>';
echo $demo->age;



//__set(string $name,mixed $val)设置不可访问的值时会调用该方法。
class Demo1{
    private $age;
    public $name;
    //访问一些访问不到的属性和不存在的属性，给属性设置值，自动调用,过滤，安全
    function __set($name,$val){
        if($this->name=='admin'){
            echo $this->$name=$val;
        }else{
            echo '权限不够';
        }
    }
}
$demo1=new Demo1();
echo '<hr/>';
$demo1->name = 'admin';
$demo1->age = 20;

//echo PHP_VERSION;


//__toString尝试直接访问一个实例化出来的对象时会调用该方法，该方法中必须有一个返回值,当没有该方法时，会报错
class Demo2{
    //此魔术方法必须要求里面有返回值
    function __toString()
    {
        // TODO: Implement __toString() method.
        return '__toString';
    }
}
$a = new Demo2();
//当你尝试直接输出对象时会自动调用
echo $a;

//__sleep serialize()函数会检查类中是否存在魔术方法__sleep(),如果存在，该方法会先被调用，然后才执行序列化操作。作用：此功能可以用于清理对象，并返回一个包含对象中所有应该被序列化的变量名称的数组。如果该方法未返回任何内容，则NULL被序列化，并产生E_NOTICE级别的错误。
//__sleep()常用作提交未提交的数据，或类似的数据清理工作。同时，如果有一些很大的对象，但不需要保存全部信息


//__wakeup unserialize()会检查是否存在一个__wakeup()方法，如存在则先调用该方法，预先准备对象
