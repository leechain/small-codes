<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 08:08:36
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 08:56:50
 */

// 单例模式

//1、普通类的实例化，得到两个对象
// class Single{
// 	public $rand;
// 	public function __construct(){
// 		$this->rand=mt_rand(1000,9999);
// 	}
// }
// var_dump(new Single());
// var_dump(new Single());


// 2、受保护的构造方法，不能调用
// class Single{
// 	public $rand;
// 	protected function __construct(){
// 		$this->rand=mt_rand(1000,9999);
// 	}
// }
// var_dump(new Single());
// var_dump(new Single());


// 3 4、转移控制权，设为静态，依然是多个对象
// class Single{
// 	public $rand;
// 	protected function __construct(){
// 		$this->rand=mt_rand(1000,9999);
// 	}

// 	static public function getins(){
// 		return new Single();
// 	}
// }
// var_dump(Single::getins());
// var_dump(Single::getins());



// 5、添加判断，子类重写后得到多个实例，单例模式被破坏
// 解决方法：在__construct函数前加final，使它不能被子类重写
class Single{
	public $rand;
	static public $ob=null;

	final protected function __construct(){
		$this->rand=mt_rand(1000,9999);
	}

	static public function getins(){
		if(Single::$ob===null){
			Single::$ob=new Single();
		}
		return Single::$ob;
	}
}

class Test extends Single{
	// public function __construct(){
	// 	var_dump(rand(1000,9999));
	// }
}
// new Test();
// new Test();

var_dump(Single::getins());
var_dump(Single::getins());

// 想要用getins就要实例化，只要实例化就会调用构造函数，报错！-->静态